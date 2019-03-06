<?php

require '../info/dirty-blondes.php';

$bandName = 'The Dirty Blondes Band';

$navItems = [['About', 'about'], ['Gigs', 'shows'], ['Media', 'media'], ['Booking', 'contact']];

$infoRows = sqlQuery("SELECT * FROM info");

$memberRows = sqlQuery("SELECT * FROM members");

$showRows = sqlQuery("
  SELECT * FROM shows LEFT JOIN venues ON shows.venue = venues.name
  WHERE show_time > NOW()
  ORDER BY show_time
");

$videoRows = sqlQuery("SELECT * FROM media WHERE type = 'VIDEO'");

while ($obj = $infoRows->fetch_object()) {
    switch ($obj->type) {
        case "EMAIL":
            $contactEmail = $obj;
            break;
        case "PHONE":
            $contactPhone = $obj;
            break;
    }
}

function showListItem($obj, $showPhoto) {
    global $imagePath;
    $showDT = new DateTime($obj->show_time);
    $showDate = $showDT->format('D, F jS Y');
    $showTime = $showDT->format('g:i a');
    $calLink = "cal-event.php?id=$obj->id";
    $mapLink = "https://www.google.com/maps/search/?api=1&query=$obj->location";
    $view = "
<li>
  <div class='info'>
    <div class='heading'>
      <span class='heavy'>$showDate</span> at $showTime
    </div>
    <p>
      <a href='$obj->link' target='_blank'>
        <span class='heavy'><u>$obj->venue</u></span>
      </a>
      <br>$obj->location
    </p>
";
    if ($obj->show_info) {
        $view .= "
    <p>$obj->show_info</p>
";
    }
    $view .= "
    <p class='links'>
      <a href='$calLink' download='dbb-event.ics'>🗓 <u>Add to calendar</u></a>
      <a href='$mapLink' target='_blank'>🚗 <u>Get directions</u></a>
    </p>
";
    if ($showPhoto) {
        $imgURL =  $imagePath . $obj->photo;
        $view .= "
  </div>
  <div class='preview' style='background-image: url($imgURL)'>
"; 
        if ($obj->event_link) {
            $view .= "
    <a href='$obj->event_link' target='_blank'>
      <div class='btn fb'>Join the Facebook Event</div>
    </a>
";
        }
    }
    $view .= "
  </div>
</li>
";
    return $view;
}

function memberSection($obj) {
    global $imagePath;
    $view = "
<div class='section'>
  <div class='bio_pic' style='background-image: url($imagePath$obj->photo)'></div>
  <h3 class='heading'>$obj->name</h3>
  <p class='light'>$obj->role</p>
  <p>$obj->bio</p>
</div>
";
    return $view;
}

$bookingText = "
<p>We entertain dinner and dancing venues, we rock out roadhouses, and play crowd-pleasing favorites for festival audiences!</p>
<p>We also perform for formal functions, country clubs and private parties. We are versatile and professional and ready to get your party started!</p>
";

$contactInfoBox = "
<div>
  <div class='heading'>
    <h3 class='heavy'>Book us for your next event</h3> 🎉
  </div>
  <ul class='contact_links sub_heading heavy'>
    <li>
      <div>
        <a href='tel:$contactPhone->link'>📱 
          <span>Call $contactPhone->name at $contactPhone->link</span>
        </a>
      </div>
    </li>
    <li>
      <div>
        <a href='mailto:$contactEmail->link'>📨 
          <span>$contactEmail->link</span>
        </a>
      </div>
    </li>
  </ul>
</div>
";

$mailingListBox = "
<div>
  <div class='heading'>
    <h3 class='heavy'>Join our mailing list</h3> 📋
  </div>
  <form name='mailing_list' action='mailing-list.php' method='POST' enctype='multipart/form-data'>
    <div class='mailing_list'>
      <input class='text_field' type='text' name='member_email' placeholder='Enter your email address' maxlength='100' required>
      <input class='btn' type='submit' value='Sign Up'>
    </div>
  </form>
</div>
";

?>

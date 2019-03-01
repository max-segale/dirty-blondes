<?php

require '../info/dirty-blondes.php';

function showListItem($obj, $showPhoto) {
    global $imagePath;
    $showDT = new DateTime($obj->show_time);
    $showDate = $showDT->format('D, F jS');
    $showTime = $showDT->format('g:i a');
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
          <!--<p>
            <a>🗓 <u>Add to calendar</u></a>
            <a>🚗 <u>Get directions</u></a>
          </p>-->
          <p>$obj->show_info</p>
";
    if ($obj->event_link and 1 == 2) {
        $view .= "
          <a href='$obj->event_link' target='_blank'>
            <div class='btn fb'>Join the Facebook Event!</div>
          </a>
";
    }
    if ($showPhoto) {
        $imgURL =  $imagePath . $obj->photo;
        $view .= "
        </div><div class='preview' style='background-image: url($imgURL);'>
"; 
    }
    $view .= "
        </div>
      </li>
    ";
    return $view;
}

function memberSection($obj) {
    global $imagePath;
    $section = "
      <div class='section'>
        <div class='bio_pic' style='background-image: url($imagePath$obj->photo)'></div>
        <h3 class='heading'>$obj->name</h3>
        <p class='light'>$obj->role</p>
        <p>$obj->bio</p>
      </div>
    ";
    return $section;
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
      <input class='btn' type='submit' value='Join'>
    </div>
  </form>
</div>
";

?>

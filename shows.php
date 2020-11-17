<?php

include 'header.php';

echo "
  <h1 class='title'>Upcoming Shows</h1>
  <div class='section'>
    <ul class='gigs full'>
";
if ($showRows->fetch_object()) {
    while ($obj = $showRows->fetch_object()) {
        echo showListItem($obj, true);
    }
} else {
    echo showListItem(false, false);
}

echo "
    </ul>
  </div>
";

$imgURL = $imagePath . 'dirty-blondes-dancing-crowd.jpg';

echo "
  <div class='band_shot' style='background-image: url($imgURL)'></div>
  <div class='section small'>
    $mailingListBox
  </div>
";

include 'footer.php';

?>
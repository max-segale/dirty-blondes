<?php

include 'header.php';

echo "
  <h1 class='title'>Upcoming Shows</h1>
  <div class='section'>
    <ul class='gigs full'>
";

while ($obj = $showRows->fetch_object()) {
    echo showListItem($obj, true);
}

echo "
    </ul>
  </div>
";

$imgURL = $imagePath . 'dirty-blondes-dancing-crowd.jpg';

echo "
  <div class='section small'>
    $mailingListBox
  </div>
  <div class='band_shot' style='background-image: url($imgURL)'></div>
";

include 'footer.php';

?>
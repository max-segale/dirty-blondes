<?php

include 'header.php';

$imgURL = $imagePath . 'dirty-blondes-anywhere.jpg';

echo "
  <div class='sect_grid'>
    <div class='section'>
      <h1 class='title heavy'>Contact Us</h1>
      $bookingText
    </div>
    <div class='section'>
      $contactInfoBox
    </div>
    <div class='section small'>
      $mailingListBox
    </div>
  </div>
  <div class='band_shot' style='background-image: url($imgURL')></div>
";

include 'footer.php';

?>
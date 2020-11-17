<?php

include 'header.php';

$imgURL = $imagePath . 'dirty-blondes-anywhere.jpg';

echo "
  <h1 class='title'>Contact Us</h1>
  <div class='sect_grid'>
    <div class='section'>
      $bookingText
    </div>
    <div class='section'>
      $contactInfoBox
    </div>
  </div>
  <div class='band_shot' style='background-image: url($imgURL')></div>
  <div class='section small'>
    $mailingListBox
  </div>
";

include 'footer.php';

?>
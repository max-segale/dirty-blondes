<?php

include 'header.php';

$type = $_REQUEST['type'];

if ($type === 'video') {

?>
  <h1 class="title heavy">Media</h1>
  <div class="section">
    <h2 class="heading heavy">Live Performances</h1>
    <ul class="media_grid">
      <?= mediaListItems('VIDEO'); ?>
    </ul>
  </div>
  <div class="section">
    <h2 class="heading heavy">Music Videos</h1>
    <ul class="media_grid">
      <?= mediaListItems('MUSICVIDEO'); ?>
    </ul>
  </div>
<?

} else {

?>
  <div class="section">
    <h2 class="heading heavy">Photo Gallery</h2>
    <ul class="media_grid">
      <?= mediaListItems('PHOTO'); ?>
    </ul>
  </div>
<?

}

include 'footer.php';

?>
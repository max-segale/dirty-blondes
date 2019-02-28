<?php

include 'header.php';

?>
  <div class="section">
    <h1 class="title heavy">Live Performances</h1>
    <ul class="media_grid">
<?php

while ($video = $videoRows->fetch_object()) {
    $videoView = "
      <li>
        <p class='caption light'>$video->caption</p>
        <div class='video_box'>
          <iframe src='$video->link' scrolling='no'></iframe>
        </div>
      </li>
    ";
    echo $videoView;
}

?>
    </ul>
  </div>
<?php

include 'footer.php';

?>
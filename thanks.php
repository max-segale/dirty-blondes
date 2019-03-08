<?php

include 'header.php';

$actionStatus = "✅ Success ✅";
//$actionStatus = "⚠️ Try Again ⚠️";

$thanksMsg = "Thank you for joining the mailing list.</p><p>Stay tuned for updates about our latest gigs!";
//$thanksMsg = "Thank you for contacting us.</p><p>We will reply to your message quickly. We are ready to play!";

?>
        <h1 class="title center"><?= $actionStatus ?></h1>
        <div class="section center">
          <p><?= $thanksMsg ?></p>
        </div>
        <div class="band_shot" style="background-image: url(<?= $imagePath ?>dirty-blondes-band-parked.jpg)"></div>
<?php

include 'footer.php';

?>
<?php

include 'header.php';

$actionStatus = "✅ Success ✅";
//$actionStatus = "⚠️ Try Again ⚠️";

$thanksMsg = "Thank you for joining the mailing list.</p><p>Stay tuned for updates about our latest gigs!";
//$thanksMsg = "Thank you for contacting us.</p><p>We will reply to your message quickly. We are ready to play!";

?>
        <div class="section center">
          <h1 class="heading heavy"><?= $actionStatus ?></h1>
          <p><?= $thanksMsg ?></p>
        </div>
        <div class="band_shot" style="background-image: url(<?= $imagePath ?>dirty-blondes-band-parked.jpg)"></div>
<?php

include 'footer.php';

?>
<?php

include 'header.php';

?>
        <div id="front_photos" class="front_photos">
          <div class="section">
            <div class="para">
              <h1 class="heavy">The Dirty Blondes Rock Band</h1>
              <span>is a 5 piece group based in North Jersey, with a Classic Rock repertoire as eclectic as its members.</span>
            </div>
            <p>Our upbeat dance tunes, groovy blues and hard rock edge draws a fun loving fan base with a party attitude!</p>
          </div>
        </div>
        <div class="sect_grid front">
          <div class="show section">
            <span class="heading heavy">Don't miss our next gig! 🎸</span>
            <ul class="gigs">
              <?= showListItem($showRows->fetch_object(), true) ?>
            </ul>
          </div>
          <div class="video section">
            <span class="heading heavy">Our Original Music Video 🎬</span>
            <video class="front_video" width="100%" poster="<?= $imagePath ?>nj-classic-rock-band-rts-banner.jpg" controls>
              <source src="<?= $videoPath ?>the-dirty-blondes_road-to-somewhere_video.mp4" type="video/mp4">
            </video>
            <?= $bookingText ?>
          </div>
          <div class="booking section">
            <?= $contactInfoBox ?>
          </div>
          <div class="mailing section">
            <?= $mailingListBox; ?>
          </div>
        </div>
        <div class="band_shot" style="background-image: url(<?= $imagePath ?>dirty-blondes-band-porch-2.jpg)"></div>
<?php

include 'footer.php';

?>
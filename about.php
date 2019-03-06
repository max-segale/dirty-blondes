<?php

include 'header.php';

?>
  <div class="section">
    <h1 class="title heavy">Meet the Band</h1>
    <div class="band_shot in_text" style="background-image: url(<?= $imagePath ?>dirty-blondes-band-porch-1.jpg)"></div>
    <p><?= $bandName ?> originated in 2006, when Christy and Al met playing in a Blues band decided to create a more commercially viable project. The band solidified with the rhythm section when Pete was recruited on bass and Jamie took over on drums.</p>
    <p>Lisa Deane, Christy's Black River Girls partner and good friend, came on as lead vocalist and the band gelled and has been gigging steadily ever since!</p>
    <p>With Lisa's amazing vocal chops, Al's incendiary guitar work, Pete's solid rhythmic bass, Jamie's hard driving and tasteful drumming and Christy's creative fills and foundation.</p>
    <p><?= $bandName ?> are a synergistic force with a crowd pleasing repertoire and dynamic stage presence. Also, we have exceptional original songs and have been featured on local radio stations!</p>
  </div>
<?php

while ($memberObj = $memberRows->fetch_object()) {
    echo memberSection($memberObj);
}

include 'footer.php';

?>
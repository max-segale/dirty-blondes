    </div>
    <footer>
      <div>
        <a href="<?= $contactPhone->link ?>"><?= $contactPhone->link ?></a>
      </div>
      <div>
        <a href="<?= $contactEmail->link ?>"><?= $contactEmail->link ?></a>
      </div>
      <nav>
        <ul>
<?php

$navItems = [['Home', 'index'], ['About', 'about'], ['Gigs', 'shows'], ['Media', 'media'], ['Booking', 'contact']];

foreach ($navItems as $item) {
    $selected = false;
    $navView = "<li";
    if ($item[1] == $thisPage) {
      $navView .= " class='selected'";
    }
    $navView .= "><a href='$item[1]'>$item[0]</a></li>";
    echo $navView;
}

?>
        </ul>
      </nav>
      <p class="light"><?= $bandName ?> &copy; <?= date("Y") ?></p>
      <br>
      <i class="light">Website built by 
        <a href="http://maxsegale.com" target="_blank">Max Segale</a>
      </i>
    </footer>
  </body>
</html>

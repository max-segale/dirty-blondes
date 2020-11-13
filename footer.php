    </div>
    <footer>
      <div class="link">
        <a href="tel:<?= $contactPhone->link ?>"><?= $contactPhone->link ?></a>
      </div>
      <div class="link">
        <a href="mailto:<?= $contactEmail->link ?>"><?= $contactEmail->link ?></a>
      </div>
      <nav>
        <ul>
          <?= navListItems(false) ?>
        </ul>
      </nav>
      <div class="small">
        <p class="light"><?= $bandName ?> &copy; <?= date("Y") ?></p>
        <br>
        <i class="light">Website built by
          <a href="http://maxsegale.com" target="_blank">Max Segale</a>
        </i>
      </div>
    </footer>
  </body>
</html>

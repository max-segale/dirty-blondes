    </div>
    <footer>
      <div class="link">
        <a href="<?= $contactPhone->link ?>"><?= $contactPhone->link ?></a>
      </div>
      <div class="link">
        <a href="<?= $contactEmail->link ?>"><?= $contactEmail->link ?></a>
      </div>
      <nav>
        <ul>
          <?= navListItems(false) ?>
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

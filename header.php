<?php

require_once('components.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="We are a rock band from northern New Jersey that plays original songs and classic hits. Call <?= $contactPhone->link ?> for booking.">
    <meta name="robots" content="index, follow, all">
    <meta name="googlebot" content="index, follow, all">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Dirty Blondes 🎸 NJ Rock Band</title>
    <link rel="stylesheet" type="text/css" href="style.php">
  </head>
  <body>
    <header>
      <div class="logo">
        <img class="mudflap_girl" src="<?= $imagePath ?>dirty-blondes-girl-l.png">
        <span class="logo_text heavy"><a href="index">The Dirty Blondes</a></span>
        <img class="mudflap_girl" src="<?= $imagePath ?>dirty-blondes-girl-r.png">
      </div>
      <nav>
        <ul>
          <?= navListItems(true) ?>
        </ul>
      </nav>
    </header>
    <div class="container">

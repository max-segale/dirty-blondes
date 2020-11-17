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
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.php">
  </head>
  <body>
    <header>
      <div class="logo">
        <div class="logo_img"></div>
      </div>
      <label for="menu_btn_check" class="menu_btn_label">
        <div class="menu_btn_box"></div>
      </label>
      <input id="menu_btn_check" type="checkbox">
      <nav>
        <ul>
          <?= navListItems(true) ?>
        </ul>
      </nav>
    </header>
    <div class="container">

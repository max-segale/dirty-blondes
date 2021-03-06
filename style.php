<?php

require '../info/dirty-blondes.php';

header("Content-type: text/css; charset: UTF-8");

$fontFam = "Helvetica Neue, Helvetica, sans-serif";
$textColor = "#FFFFFF";
$backColor = "#000000";
$contColor = "#222222";
$boxColor = "#666666";

?>
/* global styles */
* {
  margin: 0;
  border: 0;
  padding: 0;
  box-sizing: border-box;
}

/* tag styles */
html, body {
  text-align: left;
  font-size: 18px;
  font-family: <?= $fontFam ?>;
  color: <?= $textColor ?>;
  background-color: <?= $backColor ?>;
  -webkit-text-size-adjust: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
h1, h2, h3 {
  display: inline;
  font-size: inherit;
  font-weight: inherit;
}
a {
  text-decoration: none;
  color: inherit;
}
p {
  margin: 0.5em 5px;
}
ul {
  list-style: none;
}
video {
  background-color: <?= $backColor ?>;
  border-radius: 10px;
}

/* common classes */
.title {
  display: block;
  padding: 20px 10px 0;
  font-size: 1.48em;
  font-weight: 700;
}
.heading {
  display: block;
  margin: 5px;
  font-size: 1.24em;
}
.sub_heading {
  font-size: 1.16em;
}
.light {
  font-weight: 300;
}
.heavy {
  font-weight: 700;
}
.center {
  text-align: center;
}
.para {
  margin: 0.5em 5px;
}
.section {
  padding: 5px;
  clear: both;
  overflow: hidden;
}
.band_shot {
  margin: 5px;
  border-radius: 10px;
  padding-bottom: 50%;
  background-color: <?= $boxColor ?>;
  background-size: cover;
  background-position: center middle;
}
.band_shot.in_text {
  margin: 0;
}

/* header area */
header {
  width: 100%;
  color: <?= $backColor ?>;
  background-color: <?= $textColor ?>;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.8);
  padding: 8px 5px 4px;
  white-space: nowrap;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  align-items: center;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 1;
}
header .logo {
  flex: 1 0 272px;
}
header .logo_img {
  margin: 0 auto;
  width: 100%;
  height: 32px;
  background-image: url("<?= $imagePath ?>dirty-blondes-nj-rock-band-banner.png");
  background-position: center top;
  background-repeat: no-repeat;
  background-size: contain;
}
header .menu_btn_label {
  flex: 0 0 30px;
  width: 30px;
  height: 30px;
}
header .menu_btn_box {
  width: 100%;
  height: 100%;
  background-color: <?= $backColor ?>;
  background-image: url("<?= $imagePath ?>icon-menu-24px.svg");
  background-size: 24px;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 5px;
}
header #menu_btn_check {
  display: none;
}
header #menu_btn_check:checked + nav {
  overflow: visible;
}
header nav {
  flex: 0 0 100%;
  height: 0;
  overflow: hidden;
}
header nav ul {
  float: right;
  display: flex;
  flex-flow: column nowrap;
  justify-content: space-between;
  align-items: baseline;
  margin: 5px 0 0 0;
  border-radius: 0 0 10px 10px;
  padding: 5px 10px 10px;
  background-color: <?= $textColor ?>;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.8);
}
header nav ul li {
  width: 100%;
  font-size: 1.16em;
  margin: 5px 0 0 0;
  padding: 2px 10px;
  border-radius: 5px;
  background-color: <?= $textColor ?>;
}
header nav ul li:hover {
  background-color: #DDDDDD;
}
header nav ul li:active {

}
header nav ul li.selected {
  background-color: <?= $backColor ?>;
  color: <?= $textColor ?>;
}

/* front page */
.container {
  margin: 0 auto;
  padding-top: 44px
}
.front_photos {
  position: relative;
  height: 300px;
  background-image: url("<?= $imagePath ?>/the-dirty-blondes-rock-band-nj-events.jpg");
  background-position: center top;
  background-size: contain;
  background-repeat: no-repeat;
}
.front_photos .section {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  padding: 10px;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.75);
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), <?= $backColor ?>);
}
.front_video {
  border: 2px solid #FFFFFF;
}

/* contact info */
.contact_links {
  color: #000000;
  background-color: #FFFFFF;
  padding: 5px;
  border-radius: 10px;
}
.contact_links > li {
  padding: 5px;
  display: inline-block;
}
.contact_links > li:hover span {
  text-decoration: underline;
}
.contact_links > li a:hover {
  text-decoration: none;
}

/* mailing list */
.mailing_list {
  display: flex;
  flex-flow: row nowrap;
  justify-content: flex-start;
}
.mailing_list .text_field {
  background-color: #FFFFFF;
  border-radius: 10px 0 0 10px;
  padding: 10px;
  font-size: 1em;
  flex: 3 0 0;
}
.mailing_list .btn {
  padding: 5px 20px;
  border-radius: 0 10px 10px 0;
  color: #ffffff;
  background-color: #5C9000;
  font-size: 1.16em;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
  flex: 1 0 0;
  -webkit-appearance: none;
}

/* about members */
.bio_pic {
  float: right;
  width: 50%;
  margin: 0 0 5px 5px;
  border-radius: 10px;
  padding-bottom: 100%;
  background-color: <?= $boxColor ?>;
  background-size: cover;
  background-position: center;
}

/* media items */
.media_grid .caption {
  padding: 5px 10px 20px;
  font-style: italic;
  font-weight: 300;
  text-align: center;
}
.video_box {
  position: relative;
  padding-bottom: 56%;
}
.video_box iframe {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border: 2px solid <?= $boxColor ?>;
  background-color: <?= $boxColor ?>;
}
.photo_box {
  border-radius: 10px;
  overflow: hidden;
}
.photo_box .photo {
  display: block;
  width: 100%;
}

/* shows list */
.gigs > li {
  background-color: #FFFFFF;
  color: #000000;
  margin: 0 0 10px;
  padding: 5px;
  border-radius: 10px;
  overflow: hidden;
}
.gigs > li .links u {
  margin-right: 10px;
}
.gigs > li .btn {
  color: #FFFFFF;
  background-color: #666666;
  padding: 10px;
  border-radius: 10px;
  text-align: center;
}
.gigs > li .btn.fb {
  border: 2px solid #FFFFFF;
  background-color: #3B5998;
  position: absolute;
  left: 5px;
  top: 5px;
}
.gigs > li .preview {
  width: 100%;
  padding-bottom: 50%;
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  position: relative;
}

/* footer area */
footer {
  text-align: center;
  margin-top: 20px;
  padding: 20px 10px 40px 10px
}
footer nav ul {
  display: flex;
  flex-flow: row nowrap;
  justify-content: space-around;
  align-items: baseline;
  padding: 40px 0;
}
footer nav li.selected {
  text-decoration: underline;
}
footer .link {
  margin: 5px 0;
}
footer .small {
  font-size: 0.8em;
}

/* mid size styles */
@media (min-width: 568px) {
  .container {
    padding-top: 76px;
  }
  header .logo {
    flex: 100%;
  }
  header .menu_btn_label {
    display: none;
  }
  header nav {
    height: initial;
  }
  header nav ul {
    float: none;
    box-shadow: none;
    flex-flow: row nowrap;
    margin: 0;
    border-radius: 0;
    padding: 0;
  }
  header nav ul li {
    flex: 0;
  }
  .sect_grid {
    display: flex;
    flex-flow: row wrap;
  }
  .sect_grid > * {
    flex: 50%;
  }
  .sect_grid.front > .show {
    order: 2;
  }
  .sect_grid.front > .video {
    order: 1;
  }
  .sect_grid.front > .booking {
    order: 3;
  }
  .sect_grid.front > .mailing {
    order: 4;
  }
  .section.small {
    width: 568px;
    flex: 0 0 568px;
    margin: 0 auto;
  }
  .gigs.full > li {
    display: flex;
    flex-flow: row wrap;
  }
  .gigs.full > li .info {
    flex: 50%;
  }
  .gigs.full > li .preview {
    flex: 50%;
    padding-bottom: 25%;
  }
  .media_grid > li {
    padding: 0 5px;
  }
  footer nav {
    width: 568px;
    margin: 0 auto;
  }
}

/* large size styles */
@media (min-width: 720px) {
  header nav ul {
    width: 720px;
    margin: 0 auto;
  }
  .band_shot.in_text {
    float: right;
    width: 50%;
    margin-left: 10px;
    padding-bottom: 30%;
  }
  .bio_pic {
    padding-bottom: 75%;
  }
}

/* full size styles */
@media (min-width: 1024px) {
  header .logo_img {
    height: 40px;
  }
  .container {
    padding-top: 84px;
    width: 1024px;
    margin: 0 auto;
  }
  .title {
    padding: 20px 15px 0;
  }
  .section {
    padding: 10px;
  }
  .bio_pic {
    padding-bottom: 50%;
  }
  .front_photos {
    height: 400px;
  }
}
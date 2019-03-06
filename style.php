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
  font-size: 16px;
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
a:hover {
  text-decoration: underline;
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
  margin: 10px 5px 5px;
  font-size: 1.32em;
}
.heading {
  display: block;
  margin: 5px;
  font-size: 1.24em;
}
.sub_heading {
  font-size: 1.16em;
}
.caption {
  font-size: 0.8em;
  margin: 0 5px;
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
  padding: 10px 0 0;
  text-align: center;
  white-space: nowrap;
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  align-items: baseline;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 1;
}
header .logo {
  flex: 100%;
}
header .mudflap_girl {
  height: 25px;
}
header .logo_text {
  font-size: 1.64em;
  margin: 0 5px;
  white-space: nowrap;
}
header nav {
  flex: 100%;
  padding: 0 10px;
}
header nav ul {
  display: flex;
  flex-flow: row nowrap;
  justify-content: space-between;
  align-items: baseline;
  margin: 0 auto;
}
header nav ul li {
  font-size: 1.16em;
  padding: 2px 10px;
  border-radius: 5px 5px 0 0;
}
header nav ul li:hover {
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
  padding-top: 70px
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
.video_box {
  position: relative;
  margin: 5px 0 20px 0;
  padding-bottom: 56.0563%;
}
.video_box iframe {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: <?= $backColor ?>;
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
  font-size: 0.8em;
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

/* mid size styles */
@media (min-width: 568px) {
  header nav {
    flex: 0 0 568px;
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
  .media_grid {
    display: flex;
    flex-flow: row wrap;
  }
  .media_grid > li {
    flex: 50%;
  }
  footer nav {
    width: 568px;
    margin: 0 auto;
  }
}

/* large size styles */
@media (min-width: 720px) {
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
  .container {
    width: 1024px;
    margin: 0 auto;
  }
  .section {
    padding: 10px;
  }
  .bio_pic {
    padding-bottom: 50%;
  }
}
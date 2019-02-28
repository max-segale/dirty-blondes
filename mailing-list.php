<?php

require '../info/dirty-blondes.php';

$memberEmail = $_POST['member_email'];

if ($memberEmail !== "") {
  sqlQuery("INSERT INTO mailing_list (email) VALUES ('$memberEmail')");
  header('Location: thank-you.php');
}

?>
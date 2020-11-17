<?php
require '../info/dirty-blondes.php';
// get new email
$memberEmail = $_POST['member_email'];
// add new mailing list member, go to thanks page
if ($memberEmail !== "") {
  sqlQuery("INSERT INTO mailing_list (email) VALUES ('$memberEmail')");

  // send confirmation email

  header('Location: thanks.php');
}
?>
<?php

require_once('../common/functions.php');
require_once('../info/dirty-blondes.php');
require_once('../../library/icalendar/zapcallib.php');

header("Content-type: text/calendar; charset: UTF-8");

$showId = $_REQUEST['id'];

$showObj = sqlQuery("
  SELECT shows.show_time, shows.show_info, shows.venue, venues.location
  FROM shows LEFT JOIN venues ON shows.venue = venues.name
  WHERE shows.id = '$showId'
")->fetch_object();

$startDateTime = new DateTime($showObj->show_time);
$endDateTime = clone $startDateTime;
$endDateTime->add(new DateInterval('PT3H'));
$DTFormat = 'Y-m-d H:i:s';

$evtDTStamp = ZCiCal::fromSqlDateTime();
$evtSummary = ZCiCal::formatContent("$bandName at $showObj->venue");
$evtStart = ZCiCal::fromSqlDateTime($startDateTime->format($DTFormat));
$evtEnd = ZCiCal::fromSqlDateTime($endDateTime->format($DTFormat));
$evtLocation = ZCiCal::formatContent("$showObj->venue\n$showObj->location");
$evtDescription = ZCiCal::formatContent("$showObj->show_info");

$icalobj = new ZCiCal();
$evtObj = new ZCiCalNode("VEVENT", $icalobj->curnode);

$evtObj->addNode(new ZCiCalDataNode("UID:$showId"));
$evtObj->addNode(new ZCiCalDataNode("DTSTAMP:$evtDTStamp"));
$evtObj->addNode(new ZCiCalDataNode("SUMMARY:$evtSummary"));
$evtObj->addNode(new ZCiCalDataNode("DTSTART:$evtStart"));
$evtObj->addNode(new ZCiCalDataNode("DTEND:$evtEnd"));
$evtObj->addNode(new ZCiCalDataNode("LOCATION:$evtLocation"));
$evtObj->addNode(new ZCiCalDataNode("DESCRIPTION:$evtDescription"));

echo $icalobj->export();

?>
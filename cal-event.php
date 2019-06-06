<?php
require_once '../common/functions.php';
require_once '../info/dirty-blondes.php';
require_once '../../library/icalendar/zapcallib.php';
// set content as calendar
header("Content-type: text/calendar; charset: UTF-8");
// get show id
$showId = $_REQUEST['id'];
// query show info
$showObj = sqlQuery("
    SELECT shows.show_time, shows.show_info, shows.venue, venues.location
    FROM shows
        LEFT JOIN venues ON shows.venue = venues.name
    WHERE shows.id = '$showId'
")->fetch_object();
// format event time
$startDateTime = new DateTime($showObj->show_time);
$endDateTime = clone $startDateTime;
$endDateTime->add(new DateInterval('PT3H'));
$DTFormat = 'Y-m-d H:i:s';
// create ical object
$icalobj = new ZCiCal();
// create node values
$evtDTStamp = ZCiCal::fromSqlDateTime();
$evtSummary = ZCiCal::formatContent("$bandName 🎸");
$evtStart = ZCiCal::fromSqlDateTime($startDateTime->format($DTFormat));
$evtEnd = ZCiCal::fromSqlDateTime($endDateTime->format($DTFormat));
$evtLocation = ZCiCal::formatContent("$showObj->venue\n$showObj->location");
$evtDescription = ZCiCal::formatContent("$showObj->show_info");
// create event
$evtObj = new ZCiCalNode("VEVENT", $icalobj->curnode);
// create nodes and set values
$evtObj->addNode(new ZCiCalDataNode("UID:$showId"));
$evtObj->addNode(new ZCiCalDataNode("DTSTAMP:$evtDTStamp"));
$evtObj->addNode(new ZCiCalDataNode("SUMMARY:$evtSummary"));
$evtObj->addNode(new ZCiCalDataNode("DTSTART:$evtStart"));
$evtObj->addNode(new ZCiCalDataNode("DTEND:$evtEnd"));
$evtObj->addNode(new ZCiCalDataNode("LOCATION:$evtLocation"));
$evtObj->addNode(new ZCiCalDataNode("DESCRIPTION:$evtDescription"));
// print ical doc for download
echo $icalobj->export();
?>
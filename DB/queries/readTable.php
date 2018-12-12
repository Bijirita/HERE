<?php

$thisEvent = $_GET['thisEvent'];

$searchGuestAsEvent = "SELECT * FROM guest WHERE guest_id 
    IN (SELECT guest_id FROM event_has_guest WHERE event_id = $thisEvent)";

$searchAllGuests = "SELECT * FROM guest";
?>
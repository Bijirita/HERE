<?php

$createAdmin = "INSERT INTO admin (username, hash, salt)
    VALUES (?, ?, ?)";

$createGuest = "INSERT INTO guest (firstname, lastname, email)
    VALUES (?, ?, ?)";

$guestIsHere = "INSERT INTO event_has_guest (event_id, guest_id)
VALUES (?, ?)";

$createEvent = "INSERT INTO event (event)
    VALUES (?)";

?>

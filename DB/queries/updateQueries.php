<?php
$table = 'admin';
$table2 = 'event';
$col = 'event';
$col2 = 'hash';

$updateAdmin = "UPDATE $table SET username = ?, $col2 = ?, salt = ? WHERE username = ?";
//$updateAdmin = "UPDATE $table SET username = $username, $col2 = $hash, salt = $salt WHERE username = $user1 VALUES (?, ?, ?, ?)";

$updateGuest = "SELECT * FROM guest WHERE email = $email";

$updateEvent = "SELECT * FROM $table2 WHERE $col = $event";

?>
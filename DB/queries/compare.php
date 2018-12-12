<?php 
// $table = 'admin';
// $table2 = 'event';
// $col = 'event';
// $checkAdmin = "SELECT * FROM $table WHERE username = $username";

// $checkGuest = "SELECT * FROM guest WHERE email = $email";

// $checkEvent = "SELECT * FROM $table2 WHERE $col = $event";

$returningGuest = "SELECT guest_id FROM guest WHERE email = ?";

?>
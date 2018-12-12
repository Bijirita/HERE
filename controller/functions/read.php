<?php
if ($route == 'readGuest'){
    $table = 'guest';
}
else if ($route == 'readAdmin'){
    $table = 'admin';
}
else if ($route == 'readEvent'){
    $table = 'event';
}



$id = $GET['id'];
$stmt = $pdo->prepare($deleteGuest);
if ($stmt->execute([':id' => $id])) {
    header('Location: ../Search.php');
}
?>
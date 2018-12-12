<?php
include '../../DB/connection.php';
include '../../DB/queries/delete.php';
    $id = $_GET['id'];
    echo "id is " . $id;
    $stmt = $conn->prepare('DELETE FROM guest WHERE guest_id = ?');
    $stmt->execute([$id]);
    header('Location: ../../Search.php');
?>
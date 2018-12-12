<?php
    include './connection.php';
    global $conn;
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $stmt = $conn->prepare('SELECT * FROM useradmin WHERE username = ?');
    $stmt->execute([$user]);
    $data = $stmt->fetch();
    if ($data['password'] == $pass){
        header("Location: ./../html/admin/admin.html");
    }
    else{
        $_POST['username'] = "";
        $_POST['pass'] = "";
        header("Location: ./../html/admin/adminLoginFail.html");
    }
?>
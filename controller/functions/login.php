<?php
    global $conn;
    $username = $_POST['user'];
    $password = $_POST['password'];
    $table = 'admin';
    
    $checkAdmin = "SELECT * FROM $table WHERE username = '$username'";
    $stmt = $conn->query($checkAdmin);
    $data = $stmt->fetch();

    if ($username != $data['username']){
        header('Location: ../index.php');
    }
    else{
        $salt = $data['salt'];
        $hash = crypt($password, '$2a$07$' . $salt . '$') . "\n";
        if ($hash != $data['hash']){
            $_SESSION['validLogin'] = false;
            echo $_SESSION['validLogin'];
            header('Location: ../index.php');
        }
        else{
            $_SESSION['validLogin'] = true;
            echo $_SESSION['validLogin'];
            header("Location: ../adminHome.php");
        }
    }

?>
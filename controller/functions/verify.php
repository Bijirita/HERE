<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="./controller/route.php"  method="POST">

    <input type="text" name="user" value="./../adminHome.php" style="display: none;">  
</body>
</html>
<?php
        $username = $_POST['user'];
        $password = $_POST['password'];
        $table = 'admin';
        $current = $_POST['current'];
        $next = $_POST['next'];
        $user1 = $username;
        
        $checkAdmin = "SELECT * FROM $table WHERE username = '$username'";
        $stmt = $conn->query($checkAdmin);
        $data = $stmt->fetch();

        if ($username != $data['username']){
            header("Location: $current");
        }
        else{
            $salt = $data['salt'];
            $hash = crypt($password, '$2a$07$' . $salt . '$') . "\n";
            if ($hash != $data['hash']){
                header("Location: $current");
            }
            else{
                header("Location: $next?user1=$user1");
            }
        }
?>
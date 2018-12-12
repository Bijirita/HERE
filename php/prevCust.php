<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Sign In</title>
</head>
<body>
    <?php
        include './CRUDfunctions.php';
        $table = 'attendee';
        $col = 'email';
        $data = $email = $_POST["email"];
        $current = './../html/signUp/prevCust.html';
        $suc = './../html/signUp/signUpSuccess.html';
        $fail = './../html/signUp/notInTable.html';
        $type = 'email';
        echo "<br>";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: $current");
        }
        else{
            $info = search($table, $col, $data, $current, $suc, $fail, $type);
            header("Location: $info");
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php
        include "./CRUDfunctions.php";
        $email = $_POST["email"];
        $data = userData();
        echo "<h1>Thanks for signing in (honorific+lastname)</h1>";


    ?>
</body>
</html>
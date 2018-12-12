<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include '../DB/connection.php';
    
    $data = $conn->query('SELECT * FROM guest WHERE guest_id IN 
        (SELECT guest_id FROM event_has_guest WHERE event_id = 1)');
    $stmt = $data->fetchAll(PDO::FETCH_ASSOC);
    $rowLength = $data->columnCount();

    echo "<table class='db-table'>";

    for ($i = 0; $i < $rowLength; $i++) {
        $newCol = $data->getColumnMeta($i);
        $columns = $newCol['name'];
        echo "<th>" . $columns . "</th>";
    }

    foreach($stmt as $row) {
        echo "<tr>";
        $keys = array_keys($row);
        for ($i = 0; $i < $rowLength; $i++) {
            echo "<td>" . $row[$keys[$i]] . "</td>";
        }
    }
?>
</body>
</html>
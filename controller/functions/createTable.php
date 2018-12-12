<?php 
include 'DB/queries/readTable.php';
    $data = $conn->query($searchGuestAsEvent);
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
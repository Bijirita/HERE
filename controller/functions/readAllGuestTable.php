<?php
    include 'DB/queries/readTable.php';
    global $conn;
    $data = $conn->query($searchAllGuests);
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
        $id = $row[$keys[0]];
        echo '<td> <a href="controller/functions/deleteObject.php' . "?id=$id\"" . 'class="del_btn">' .  'Delete' . '</a></td>';
        echo '<td> <a href="controller/functions/editObject.php' . "?id=$id\"" . 'class="del_btn">' .  'Update' . '</a></td>';
        }
    echo "</table>";

    return header('Location: ../../Search.php');
?>
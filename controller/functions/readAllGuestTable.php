<?php
    include 'DB/queries/readTable.php';
    global $conn;
    $data = $conn->query($searchAllGuests);
    $stmt = $data->fetchAll(PDO::FETCH_ASSOC);
    $rowLength = $data->columnCount();
    echo "<table id='oldCust' class='custForm'>";

    for ($i = 0; $i < $rowLength; $i++) {
        $newCol = $data->getColumnMeta($i);
        $columns = $newCol['name'];s
        echo "<th>" . $columns . "</th>";
    }

    foreach($stmt as $row) {
        echo "<tr>";
        $keys = array_keys($row);
        for ($i = 0; $i < $rowLength; $i++) {
            echo "<td>" . $row[$keys[$i]] . "</td>";
        }
        $id = $row[$keys[0]];
        echo '<td> <a href="Search.php' . "?id=$id\"" . 'class="del_btn">' .  'Delete' . '</a></td>';
        // echo '<td> <a href="zipDxedit.php' . "?submission_id=$id\"" . 'class="edit_btn">' .  'Edit' . '</a></td>';
        }
    echo "</table>";

    return header('Location: ../../Search.php');
?>
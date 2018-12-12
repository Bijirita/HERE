<?php
    $table = 'event';
    $event = "SELECT * from $table"; 
    $data = $conn->query($event);
    $stmt = $data->fetchAll();
    $rowLength = $data->columnCount();
?>

<form  action='controller/route.php' class='searchForm' id="oldCust" method='post'>
    <br>
    <select name="thisEvent" id="oldCust">
        <?php
            foreach($stmt as $row) {
                $keys = array_keys($row);
                for ($i = 0; $i < $rowLength - 1; $i++) {
        ?>
            <option  value="<?php echo $row[$keys[0]]?>">  
                <?php echo $row[$keys[2]]?>
            </option>
        <?php 
                }
            }
        ?>
    </select>
    <input type="text" name="route" value="searchGuestAsEvent" style="display: none;" >
    <input type="submit" value="submit" name="">
</form>
<?php
include 'DB/connection.php';

$table = 'event';
$event = "SELECT * from $table"; 
$data = $conn->query($event);
$stmt = $data->fetchAll();
$rowLength = $data->columnCount();
?>

<form  action='guestSignin.php' class='custForm' id='NewGuest' method='get'>
    <br>
    <select name="thisEvent" >
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
    <input type="submit" value="start" name="">
</form>

<?php
include 'connection.php';
function createCust($firstname, $lastname, $email){
    global $conn;
    try{
        $stmt = "INSERT INTO attendee (firstname, lastname, email)
        VALUES ('$first', '$last', '$email')";
        $conn->exec($stmt);
    }
    catch(PDOException $e){
        echo "Action Failed: " . $e->getMessage();
    }
}
function update(){

}
function delete(){

}
function search($table, $col, $data, $current, $suc, $fail, $type){
    global $conn;
    $stmt = $conn->query("SELECT $col FROM $table") -> fetchAll
    (PDO::FETCH_COLUMN);
    $next = $current;
    $_POST["type"] = $type;
    for($i=0;$i<count($stmt);$i++)
    {
        if($data == $stmt[$i]){
            echo "success";
            $next = $suc;
            break;
        }
        else{
            echo"fail";
            $next = $fail;
        }
    }
    return $next;
}
function userData($table, $email){
    global $conn;
    $stmt = $conn->query("SELECT * FROM $table WHERE email = $email ");
}
?>
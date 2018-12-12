<?php
// include '../DB/queries/compare.php';

function check ($route)  {
    global $conn;
    if ($route == 'checkAdmin') {
        $stmt = $conn->prepare($checkAdmin);
        if($stmt->execute([$username, $hash]) == true){
            return true;
        }
        else{
            return false;
        }
    }
    else if ($route == 'checkGuest') {
        global $checkGuest;
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $stmt = $conn->prepare($checkGuest);
        if($stmt->execute([$firstName, $lastName, $email]) == true){
            return true;
        }
        else{
            return false;
        }
    }
    else if ($route == 'checkEvent') {
        global $createEvent;
        $eventName = $_POST['eventName']; 
        $stmt = $conn->prepare($checkEvent);
        if($stmt->execute([$eventName]) == true){
            return true;
        }
        else{
            return false;
        }
    }
    else if ($route == 'checkAdminLogin'){
        include './functions/login.php';

    }
    else if ($route == 'verifyLogin'){
        global $checkAdmin;
        include './functions/verify.php';
        
    }
}

?>
<?php
function emailSan($email){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if($email == filter_var($email, FILTER_VALIDATE_EMAIL)){
        return $email;
    }
    else{
        $eError = "Please enter a valid email address";
        return $eError;
    }
}
function nameSan($name){
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        $eError = "Please only enter letters";
        return $eError;
    }
    else{
        return $name;
    }
}
function phoneSan($phone){
    $pError = "Please enter a valid phone number, including area code.<br> ex. (706) 867-5309";
    $phone = preg_replace('/[^0-9]/', '', $phone);
    if(strlen($phone) === 10) {
        echo $phone;
        return $phone;
    }
    else{
        echo $pError;
        return $pError;
    }
}
?>

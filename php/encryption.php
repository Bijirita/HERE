<?php

function encrypt($input){
    $encryptPass = [];
    for ($i = 0; $i < strlen($input); $i++) {
        $c = ord($input[$i]);;
        $encryptPass[] = $c;
    }
    return $encryptPass;
}
function decrypt($input){
    $decryptPass = [];
    for($i = count($input) - 1; $i >= 0; $i--){
        $c = chr($input[$i]);
        $decryptPass[] = $c;
        }
    $decryptPass = implode("", $decryptPass);
    $decryptPass = strrev($decryptPass);
    return $decryptPass;
}
?>
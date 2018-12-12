<?php
//===including html page with defined vars for $_POST=====//
//include 'check.php';
// function create ($route) {
    // global $conn;
    include '../DB/queries/insert.php';
    include '../DB/queries/compare.php';

    

    // if ($route == 'createAdmin') {
    //     $username = $_POST['user'];
    //     $password = $_POST['password'];
    //     $cPass = $_POST['confPassword'];
        
    //     $salt = (function () {
    //     $genSalt = "";
    //     for ($i = 0; $i < 22; $i++)
    //     //===========If random # is > 0.5 == TRUE, A-Z.  If FALSE, a-z.===============//
    //             $genSalt .= rand(0, 1) > 0.5 ? chr(rand(65, 90)) : chr(rand(97,122));
    //             return $genSalt;
    //     })();
        
    //     $hash = crypt($password, '$2a$07$' . $salt . '$') . "\n";
    //     if ($password == $cPass){
    //         $stmt = $conn->prepare($createAdmin);
    //         $stmt->execute([$username, $hash, $salt]);
    //     }
    //     else{
    //         header('Location: ./../createAdmin.php');
    //     }
    // }
    // else 
    

    if ($route === 'createGuest') {
        echo("<br>");
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $event_id = $_POST['thisEvent'];
        $conn->beginTransaction();
            $stmt = $conn->prepare($createGuest);
            $stmt->execute([$firstName, $lastName, $email]);
            $last_id = $conn->lastInsertId();
            $signIn= $conn->prepare($guestIsHere);
            $signIn->execute([$event_id, $last_id]);
        $conn->commit();
        return header('Location: ../guestSignin.php?thisEvent=' . $event_id);
    }

    if ($route === 'returningGuest') {
        $email = $_POST['email'];
        $event_id = $_POST['thisEvent'];
        var_dump($email);
        echo("<br>");
        var_dump($returningGuest);
        echo("<br>");
        $stmt = $conn->prepare($returningGuest);
        $stmt->execute([$email]);
        $result = ($stmt->fetch(PDO::FETCH_ASSOC));
        $guest_id = implode($result);
        echo($guest_id);
        if (is_numeric($guest_id)) {
            $signIn= $conn->prepare($guestIsHere);
            $signIn->execute([$event_id, $guest_id]);
            return header('Location: ../guestSignin.php?thisEvent=' . $event_id);
        }else {
            echo("Email is not in the database");
        }
        

        // var_dump($stmt->execute([$email]));
        
        // return header('Location: ../guestSignin.php?thisEvent=' . $event_id);
    }

    // else if ($route == 'createEvent') {
    //     global $createEvent;
    //     $eventName = $_POST['eventName']; 
    //     $stmt = $conn->prepare($createEvent);
    //     $stmt->execute([$eventName]);
    //     return header('Location: ../createEvents.php');
    // }
    else {
        echo "We created nothing.";
    }
?>
<?php
include './../Views/session.php';
include '../DB/connection.php';

if(isset($_POST['route']) && !empty($_POST['route'])) {
    $route = $_POST['route'];
} else if ((isset($_GET['route']) && !empty($_GET['route']))) {
    $route = $_GET['route'];
} else {
    echo "We didn't get a route";
}

(function () {

    global $route, $conn;
    if ($route == 'createGuest'  || $route == 'returningGuest' || $route == 'createAdmin' || $route == 'createEvent') {
        include './functions/create.php';
        echo "fxn definition works";
        //create($route);
    }
    if ($route == 'readGuest' || $route == 'readAdmin' || $route == 'readEvent') {
        include './functions/read.php';
        echo "routed to read";
    }
    if ($route == 'updateGuest' || $route == 'updateAdmin' || $route == 'updateEvent') {
        include './functions/update.php';
        update($route);
    }
    if ($route == 'deleteGuest' || $route == 'deleteAdmin' || $route == 'deleteEvent') {
        delete($route);
        echo "routed to delete";
    }
    if ($route == 'checkAdminLogin'){
        include './functions/login.php';
        echo "We hea!";
    }
    if ($route == 'verifyLogin'){
        include './functions/verify.php';
        check($route);   
    }
    if ($route == 'startEvent') {
        header ('Location: ../startEventPage.php');
        echo "routed to Start Event";
    }
    if($route == 'logout') {
        $_SESSION['validLogin'] = false;
        header('Location: ../index.php');        
        echo "routed to index";
    }
    if ($route == 'readAllGuestTable') {
        header ('Location: ../Search.php?id=' . $_POST['id']);
    }
    if ($route == 'searchGuestAsEvent' || $route == 'searchAdmin' || $route == 'searchEvent') {
        header ('Location: ../Search.php?thisEvent=' . $_POST['thisEvent']);
        echo "routed to Search.php";
    }
    else {
        echo "not routed";
    }
})($route);
?>
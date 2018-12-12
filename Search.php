<?php include 'DB/connection.php' ?>
<?php include 'Views/header.php'?> 
<?php include 'forms/searchGuestAsEventForm.php'?>
<?php include 'forms/searchAllGuestsForm.php' ?>
<?php 
    if (isset($_GET['thisEvent'])) {
        include 'controller/functions/createTable.php';
    }else if (isset($_GET['id'])) {
        include 'controller/functions/readAllGuestTable.php';
    }
?>



     <!-- <script>
            $(".drop")
            .mouseover(function() {
            $(".dropdown").show(300);
            });
            $(".drop")
            .mouseleave(function() {
            $(".dropdown").hide(300);     
            });
        </script> -->
        
 <?php include 'Views/footer.php'?>
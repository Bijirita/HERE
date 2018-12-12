<?php include 'Views/header.php';
?>

    <h2>Welcome!</h2>
     <form action="./controller/route.php" method="post">
        <div class="container">
            <?php include './forms/userPass.php' ?>

            <input type="text" name="route" value="checkAdminLogin" style="display: none;">
            <button class="Login" type="submit" name="Login" style="display:block;" >Login</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a id="psw" href="#">password?</a></span>
        </div>

        </form>
    <?php 
    include 'Views/footer.php'?>

     <script> 
        
        var dontShow = document.getElementById("Navy");
           
        window.onload = function () {
            dontShow.style.display = "none";
        }
    </script>

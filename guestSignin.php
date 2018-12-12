<?php include "Views/header.php"?>
<link rel="stylesheet" href="css/guestButton.css">
<div class="closeButton">
        <button id="closeButton">X</button>
        <?php include "forms/createGuestForm.php" ?>
        <?php include "forms/returningGuestForm.php" ?>
    </div>

    <button type="submit" id="Yes" class="button1" name="Yes">Yes!</button>
    <button type="submit" id="No" class="button1" name="No">No!</button>


  <input type="checkbox" id="switch" /><label id="switch" for="switch">End Event</label>

 <script>
    var yesBut = document.getElementById("Yes");
    var noBut = document.getElementById("No");

    var newCust = document.getElementById("oldCust");
    var oldCust = document.getElementById("newCust");
    
    var closeButton = document.getElementById("closeButton");

    window.onload = function () {
        closeButton.style.display = "none";
        newCust.style.display = "none";
        oldCust.style.display = "none";
    }

    closeButton.addEventListener("click", function(){
        newCust.style.display = "none";
        oldCust.style.display = "none"; 
        yesBut.style.display = "block";
        noBut.style.display = "block";
        closeButton.style.display = "none";
    });

    yesBut.addEventListener("click", function(){
        yesBut.style.display = "none";
        noBut.style.display = "none";
        newCust.style.display = "block";
        closeButton.style.display = "block";
    });

    noBut.addEventListener("click", function(){
        yesBut.style.display = "none";
        noBut.style.display = "none";
        oldCust.style.display = "block";
        closeButton.style.display = "block";
    });
  </script>

<?php include "Views/footer.php" ?>



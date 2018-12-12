<?php include 'views/header.php'?>
<?php include 'views/nav.php'?>


            <form action="user.html"  method="POST">
                <br>Firstname:<br>
                <input type="text" name="FirstName" value="" required>
                
                <br>Lastname:<br>
                <input type="text" name="LastName" value="" required>
                
                <br>Email:<br>
                <input type="text" name="Email" value="" required>
                
                <br>Phone Number:<br>
                <input type="text" name="Phone" value="">
                <br><br>
                <button type="submit"name="submit" value="submit">Submit</button>
            </form>
        
        <button type="submit"name="submit" value="submit">Create New Admin</button>
        <button type="submit"name="submit" value="submit">Update Admin</button>

            <script>
                    $(".drop")
                    .mouseover(function() {
                    $(".dropdown").show(300);
                    });
                    $(".drop")
                    .mouseleave(function() {
                    $(".dropdown").hide(300);     
                    });
                </script>

 <?php include 'views/footer.php'?>

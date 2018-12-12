
<?php include './Views/header.php'?>

    <label>Update Admin User</label>
    <!-- <form class="search" action="Update Admin.html" style="max-width:600px">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><i class="find"></i>Search</button>
        </form> -->
    <form action="./controller/route.php"  method="POST">
            <div class="container">
                <?php include './forms/userPass.php'?>
                <label for="confPassword"><b>Confirm Password</b></label><br>
                <input type="password" placeholder="Confirm Password" name="confPassword" required><br>
                <input type="text" name="route" value="createAdmin" style="display: none;" >
            </div>
             <button type="submit"name="submit" value="submit">Create</button><br>
    </form>
       
<?php include 'Views/footer.php'?>
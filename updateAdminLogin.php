<?php include 'Views/header.php'?>

    <label>Update Admin User</label>
    <form class="search" action="Update Admin.html" style="max-width:600px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="find"></i>Search</button>
    </form>
    
    <form action="./controller/route.php"  method="POST">
    <div class="container">
        <?php include './forms/userPass.php'?>
        <input type="text" name="route" value="verifyLogin" style="display: none;" > 
        <input type="text" name="next" value="./../updateAdmin.php" style="display: none;" >      
        <input type="text" name="current" value="./../updateAdminLogin.php" style="display: none;" >            
    </div>
    <button type="submit"name="submit" value="submit">Create</button><br>
       
<?php include 'Views/footer.php'?>
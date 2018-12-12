
<?php 
    include 'Views/header.php';
    $user1 = $_GET['user1'];
?>

<label>Update Admin User</label>
<form class="search" action="Update Admin.html" style="max-width:600px">
    <input type="text" placeholder="Search.." name="search2">
    <button type="submit"><i class="find"></i>Search</button>
</form>

<form action="./controller/route.php"  method="POST">
<div class="container">
    <p>Enter a new username and password to update your admin account.</p>
    <?php include './forms/userPass.php'?>
    <input type="text" name="route" value="updateAdmin" style="display: none;" >
    <input type="text" name="current" value="./../updateAdmin.php" style="display: none;">
    <input type="text" name="next" value="./../adminHome.php" style="display: none;">  
    <input type="text" name="user1" value="<?php echo $user1; ?>" style="display: none;">        
</div>
<button type="submit"name="submit" value="submit">Create</button><br>
   
<?php include 'Views/footer.php'?>
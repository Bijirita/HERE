

 
<?php include 'Views/header.php'?>




     <form action="controller/route.php"  method="POST">
        <br>Name of the Event:<br>
        <input type="text" name="FirstName" value="" required>

        <br>Event Category:<br>
        <select name="eventName">
                <option>Movie</option>
                <option selected="yes">Meeting</option>
                <option>Wedding</option>
                <option>Party</option>
                <option>New Category</option>
            </select>
        <input type="text" name="eventName" value="" required>

        <br>Time:<br>
        <input type="text" name="Time" value="" required>

        <br>Duration:<br>
        <input type="text" name="Duration" value="">
        <br>Where:<br>
        <input type="text" name="Where" value="">
        <br>When:<br>
        <input type="text" name="When" value="">
        <br>Date<br>
        <input type="text" name="Date" value="">
        <button type="submit"name="submit" value="submit">Submit</button>
    </form>
  
    <?php include 'Views/footer.php'?>

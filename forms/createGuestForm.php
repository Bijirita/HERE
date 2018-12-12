<form action="controller/route.php" class="custForm" id="newCust" method="post">
    <header>Check In Here!</header>
    <fieldset>
        <section>
            <div class="row">
                <label for="firstName" class="label col col-4">First Name</label>
                <div class="col col-8">
                    <label class="input">
                        <input type="text" name="firstName" required>
                    </label>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <label class="label col col-4">Last Name</label>
                <div class="col col-8">
                    <label for="lastName" class="input" >
                        <input type="text" name="lastName" required>
                    </label>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
            <label for="email" class="label col col-4">Email</label>
                <div class="col col-8">
                    <label class="input">
                        <input name="email" type="email" required>
                    </label>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col col-8">
                    <input type="submit" class="button" name="submit" value="submit" >
                </div>
            </div>
        </section>

    </fieldset>
    <?php $thisEvent = $_GET["thisEvent"]; ?>

    <input type="text" name="thisEvent"  value="<?php echo $thisEvent; ?>" style="display: none;">
    <input type="text" name="route" value="createGuest" style="display: none;" >
</form>


<?php include 'views/footer.php'?>
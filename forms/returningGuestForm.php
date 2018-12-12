<form action="controller/route.php" class="custForm" id="oldCust" method="post">
	<header>"Welcome Back!" Enter in your email.</header>
	<fieldset>

			<section>
				<div class="row">
					<label for="email" class="label col col-4">E-mail</label>
					<div class="col col-8">
						<input type="email" name="email" required>
					</div>
				</div>
			</section>

			<section>
				<div class="row">
					<div class="col col-4"></div>
					<div class="col col-8"></div>
				</div>
			</section>

			<button type="submit" class="button" name="submit" value="submit" >Submit</button>
	</fieldset>
	<?php $thisEvent = $_GET["thisEvent"]; ?>

    <input type="text" name="thisEvent"  value="<?php echo $thisEvent; ?>" style="display: none;">
    <input type="text" name="route" value="returningGuest" style="display: none;" >
</form>
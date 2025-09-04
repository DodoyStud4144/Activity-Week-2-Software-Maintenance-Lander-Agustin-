<!DOCTYPE html>
<?php
	include 'php_includes/book.php';
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Dimple Star Transport</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="icon" href="images/icon.ico" type="image/x-con">
</head>
<body>

	<?php include 'commons/navbar.php'; ?> 

	<div id="content">
		<div class="page-container two-column">

			<!-- LEFT SIDE: BOOKING FORM -->
			<div class="form-card">
				<h1 class="form-title">Book Now</h1>
				<p class="subtitle">Reserve your trip quickly and easily</p>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="booking-form">

				    <div class="form-group">
				        <label>Trip Type</label>
				        <div class="radio-group">
				            <label><input type="radio" name="way" value="2" onclick="document.getElementById('datepick2').disabled=false"> Two Way</label>
				            <label><input type="radio" name="way" value="1" onclick="document.getElementById('datepick2').disabled=true" checked> One Way</label>
				        </div>
				    </div>

				    <div class="form-group">
				        <label>Origin</label>
				        <select name="Origin" required>
				            <option value="">Select</option>
				            <option>San Lazaro</option>
				            <option>Espana</option>
				            <option>Alabang</option>
				            <option>Cabuyao</option>
				            <option>Naujan</option>
				            <option>Victoria</option>
				            <option>Pinamalayan</option>
				            <option>Gloria</option>
				            <option>Bongabong</option>
				            <option>Roxas</option>
				            <option>Mansalay</option>
				            <option>Bulalacao</option>
				            <option>Magsaysay</option>
				            <option>San Jose</option>
				            <option>Pola</option>
				            <option>Soccoro</option>
				        </select>
				    </div>

				    <div class="form-group">
				        <label>Destination</label>
				        <select name="Destination" required>
				            <option value="">Select</option>
				            <option>San Lazaro</option>
				            <option>Espana</option>
				            <option>Alabang</option>
				            <option>Cabuyao</option>
				            <option>Naujan</option>
				            <option>Victoria</option>
				            <option>Pinamalayan</option>
				            <option>Gloria</option>
				            <option>Bongabong</option>
				            <option>Roxas</option>
				            <option>Mansalay</option>
				            <option>Bulalacao</option>
				            <option>Magsaysay</option>
				            <option>San Jose</option>
				            <option>Pola</option>
				            <option>Soccoro</option>
				        </select>
				    </div>

				    <div class="form-group">
				        <label>No. of Passengers</label>
				        <input type="number" name="no_of_pass" min="1" required>
				    </div>

				    <div class="form-group">
				        <label>Departure</label>
				        <input id="datepick1" name="Departure" required>
				    </div>

				    <div class="form-group">
				        <label>Return</label>
				        <input id="datepick2" name="Return" disabled>
				    </div>

				    <div class="form-group">
				        <label>Bus Type</label>
				        <select name="bustype" required>
				            <option value="">Select</option>
				            <option>Air Conditioned</option>
				            <option>Ordinary</option>
				        </select>
				    </div>

				    <div class="form-group">
				        <button type="submit" name="submit" class="btn-submit">Submit</button>
				    </div>
				</form>
			</div>

			<!-- RIGHT SIDE: EXTRA SPACE (you can customize this) -->
			<div class="form-side-info">
				<h2>Travel with Comfort</h2>
				<p>Choose your destination and reserve your seat with just a few clicks. Dimple Star ensures safe and reliable trips for all passengers.</p>
				<img src="images/bus.jpg" alt="Bus" class="side-image">
			</div>

		</div>
	</div>

	<?php include 'commons/footer.php'; ?> 

	<script type="text/javascript" src="js/datepickr.js"></script>
	<script type="text/javascript">
		new datepickr('datepick1', { 'dateFormat': '20y-m-d' });
		new datepickr('datepick2', { 'dateFormat': '20y-m-d' });
	</script>
</body>
</html>

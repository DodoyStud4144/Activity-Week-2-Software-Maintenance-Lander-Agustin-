<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="slide/js/jquery.js"></script>
<script src="slide/js/amazingslider.js"></script>
<script src="slide/js/initslider-1.js"></script>
</head>
<body>
	<?php include("commons/navbar.php"); ?>

  	<!-- Hero section with bus background -->
  	<section class="hero-section">
  		<div class="hero-overlay">
    		<div class="hero-text">
      			<h1>Welcome to Dimple Star Transport</h1>
      			<p>Safe and reliable bus transport across Mindoro and beyond.</p>
    		</div>
    		<div class="hero-date">
				<span id="live-time"></span> <br>
			  	<?php include_once("php_includes/date_time.php"); ?>
			</div>
  		</div>
	</section>

    <!-- Contact Section -->
    <?php include("commons/contact.php"); ?>

    <!-- Footer Section -->
	<?php include("commons/footer.php"); ?>

<script>
function updateTime() {
  const now = new Date();
  const options = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
  document.getElementById("live-time").textContent = now.toLocaleTimeString([], options);
}
updateTime();
setInterval(updateTime, 1000);
</script>
</body>
</html>

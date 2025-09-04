<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dimple Star Transport - Routes & Schedules</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="icon" href="images/icon.ico" type="image/x-con">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- Navbar -->
  <?php include("commons/navbar.php"); ?>

  <!-- Main Content -->
  <main class="page-container">
    <h1 class="page-title">🚌 Routes & Schedules</h1>
    

    <!-- Route Table -->
    <div class="schedule-wrapper">
      <table class="schedule-table">
        <thead>
          <tr>
            <th>Origin</th>
            <th>Regular Schedule</th>
            <th>Destination</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ali Mall Cubao Terminal</td>
            <td>9:00 am / 10:00 am / 1:00 pm / 4:00 pm</td>
            <td>San Jose</td>
          </tr>
          <tr>
            <td>Alabang Terminal</td>
            <td>6:00 am / 7:00 am / 2:00 pm / 6:00 pm / 10:00 pm</td>
            <td>San Jose</td>
          </tr>
          <tr>
            <td>Cabuyao Terminal</td>
            <td>8:00 am / 9:00 am / 4:00 pm / 8:00 pm</td>
            <td>San Jose</td>
          </tr>
          <tr>
            <td>Espana Terminal</td>
            <td>4:30 am / 5:30 am / 12:00 pm / 4:00 pm / 8:00 pm</td>
            <td>San Jose</td>
          </tr>
          <tr>
            <td>San Lazaro Terminal</td>
            <td>3:00 am / 4:30 am / 11:00 am / 3:00 pm / 7:00 pm</td>
            <td>San Jose</td>
          </tr>
          <tr>
            <td>Pasay Terminal</td>
            <td>5:00 am / 6:00 am / 1:00 pm / 3:00 pm</td>
            <td>San Jose</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <!-- Contact Section -->
  <section class="contact-section">
    <h2>📞 Contact Us</h2>
    <p>Have questions about schedules or booking? Reach out to us:</p>
    <p><i class="fas fa-phone"></i> +63.02.985.1451 / +63.908.926.9163</p>
    <p><i class="fas fa-envelope"></i> support@dimplestar.com</p>
  </section>

  <!-- Footer -->
  <?php include("commons/footer.php"); ?>

</body>
</html>

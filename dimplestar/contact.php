<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dimple Star Transport - Contact</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="icon" href="images/icon.ico" type="image/x-icon">
</head>
<body>


  <!-- NAVIGATION -->
  <?php include("commons/navbar.php"); ?>

  <!-- CONTENT -->
  <div id="content">
    <div class="contact-container">

      <!-- LEFT SIDE INFO -->
      <div class="contact-info">
        <h1>📍 Contact Us</h1>
        <p><strong>Dimple Star Transport</strong></p>
        <p>Block 1 Lot 10, Southpoint Subd.</p>
        <p>Brgy Banay-Banay, Cabuyao, Laguna</p>
        <p>📞 Phone: 0929 209 0712</p>
      </div>

      <!-- RIGHT SIDE FORM -->
      <div class="contact-form">
        <h3>💬 Send us a Message</h3>
        <form class="validate" action="messageexec.php" method="POST">
          <label for="name">Name:</label>
          <input id="name" class="contactform" type="text" name="name" required>

          <label for="email">Email:</label>
          <input id="email" class="contactform" type="email" name="email" placeholder="you@example.com" required>

          <label for="subject">Subject:</label>
          <input id="subject" class="contactform" type="text" name="subject" required>

          <label for="message">Message:</label>
          <textarea id="message" class="contactform" name="message" rows="5" required></textarea>

          <input class="submit" type="submit" name="Submit" value="Submit">
        </form>
      </div>

    </div>
  </div>

  <!-- FOOTER -->
  <?php include("commons/footer.php"); ?>

</div>
</body>
</html>

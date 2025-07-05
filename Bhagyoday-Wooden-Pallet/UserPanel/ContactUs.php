<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Contact Bhagyoday Industries - Wooden Pallets Manufacturer in Varsola, Gujarat.">
  <meta name="author" content="Bhagyoday Industries">
  <title>Bhagyoday Industries - Contact Us</title>

  <!-- Fonts and CSS -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/bhagyoday-business.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
</head>

<body>

<div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <?php require "./themepart/header.php"; ?>

  <!-- Page Header -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact Us</h1>
          <span>We’re here to assist with your packaging needs.</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Info -->
  <div class="contact-information">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-phone"></i>
            <h4>Phone</h4>
            <p>Feel free to contact us for <br>any inquiries.</p>
            <a href="tel:+919624035200">+91 9624035200</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-envelope"></i>
            <h4>Email</h4>
            <p>We're just an <br>email away.</p>
            <a href="mailto:info@bhagyodayindustries.com">info@bhagyodayindustries.com</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-map-marker"></i>
            <h4>Location</h4>
            <p> SURVE NO.262, ROAD, VARSOLA, Sihunj, Vamali,Gujarat 387130, India.</p>
            <a href="https://goo.gl/maps/FK9Uipz2qZR2" target="_blank">View on Map</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Form -->
  <div class="callback-form contact-us">
    <div class="container">
      <div class="section-heading text-center">
        <h2>Send us a <em>message</em></h2>
        <span>We respond quickly to all queries</span>
      </div>
      <div class="contact-form">
        <form id="contact" action="SubmitForm.php" method="post" onsubmit="return sendToWhatsApp();">
          <div class="row">
            <div class="col-md-4">
              <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required />
            </div>
            <div class="col-md-4">
              <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" required />
            </div>
            <div class="col-md-4">
              <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required />
            </div>
            <div class="col-md-12 mt-3">
              <textarea name="message" rows="5" class="form-control" id="message" placeholder="Your Message" required></textarea>
            </div>
            <div class="col-md-12 mt-3 text-center">
              <button type="submit" class="filled-button">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

 <!-- Google Map -->
  <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235416.81710054266!2d72.57999919191501!3d22.788091249585193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5d790b34f057%3A0x433b2cd481f473a5!2sBHAGYODAY%20INDUSTRIES.!5e0!3m2!1sen!2sin!4v1750673915653!5m2!1sen!2sin" width="100%" height="500px" frameborder="0" style="border:2px inset #5c2005" allowfullscreen></iframe>
  </div>

  <?php require "./themepart/footer.php"; ?>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <!-- WhatsApp Integration Script -->
<script>
  function sendToWhatsApp() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    const whatsappNumber = "9624035200";

    const formattedMessage = `
📥 *New Website Inquiry*
----------------------------
👤 *Name:* ${name}
📧 *Email:* ${email}
📝 *Subject:* ${subject}
💬 *Message:* ${message}
----------------------------
📅 *Sent on:* ${new Date().toLocaleString()}
`;

    const encodedMessage = encodeURIComponent(formattedMessage);

    // Open WhatsApp with pre-filled message
    window.open(`https://wa.me/${whatsappNumber}?text=${encodedMessage}`, '_blank');

    return true; // Continue with form submission
  }
</script>
</body>
</html>

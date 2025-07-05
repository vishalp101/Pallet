<footer>
  <div class="container">
    <div class="row">
      <!-- Company Info Section -->
      <div class="col-md-4 footer-item">
        <h4>Bhagyoday Industries</h4>
        <p>Leading Wooden Pallet Manufacturers in Varsola, Gujarat. We Specialize in High-Quality, Heat-Treated Pallets Built for Durability and Global Shipping Standards.</p>
        <ul class="social-icons">
          <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
        </ul>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 footer-item">
        <h4>Quick Links</h4>
        <ul class="menu-list">
          <li><a href="AboutUs.php">About Us</a></li>
          <li><a href="#">Our Services</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="ContactUs.php">Contact Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Footer Contact Form with WhatsApp Integration -->
      <div class="col-md-4 footer-item">
        <h4>Contact Us</h4>
        <div class="contact-form">
          <form id="footer-contact-form" onsubmit="return sendFooterToWhatsApp();">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="footer-name" placeholder="Full Name" required>
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="email" class="form-control" id="footer-email" placeholder="E-Mail Address" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="footer-message" placeholder="Your Message" required></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" class="filled-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</footer>

<div class="sub-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Copyright &copy; 2025 Bhagyoday Industries. All rights reserved</p>
      </div>
    </div>
  </div>
</div>

<!-- ✅ Footer WhatsApp Script (Place just after the form, or in your JS file) -->
<script>
  function sendFooterToWhatsApp() {
    const name = document.getElementById("footer-name").value.trim();
    const email = document.getElementById("footer-email").value.trim();
    const message = document.getElementById("footer-message").value.trim();
    const whatsappNumber = "919624035200";

    const fullMessage = `
📥 *New Website Inquiry (Footer Form)*
----------------------------
👤 *Name:* ${name}
📧 *Email:* ${email}
💬 *Message:* ${message}
----------------------------
📅 *Sent on:* ${new Date().toLocaleString()}
`;

    const encoded = encodeURIComponent(fullMessage);
    window.open(`https://wa.me/${whatsappNumber}?text=${encoded}`, '_blank');
    return false;
  }
</script>

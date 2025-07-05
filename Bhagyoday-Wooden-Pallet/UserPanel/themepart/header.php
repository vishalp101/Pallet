<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-xs-12">
        <ul class="left-info">
          <li><a href="tel:+919624035200"><i class="fa fa-phone"></i>+91 9624035200</a></li>
          <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@bhagyodayindustries.com," target="_blank">
          <i class="fa fa-envelope"></i>info@bhagyodayinsdustries.com</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <p class="p-right">Gujarat's Leading Wooden Pallet Manufacturer</p>
      </div>
    </div>
  </div>
</div>

<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php"><h2>Bhagyoday Industries</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?= ($currentPage == 'index.php') ? 'active' : '' ?>">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item <?= ($currentPage == 'AboutUs.php') ? 'active' : '' ?>">
            <a class="nav-link" href="AboutUs.php">About Us</a>
          </li>
          <li class="nav-item <?= ($currentPage == 'OurServices.php') ? 'active' : '' ?>">
            <a class="nav-link" href="OurServices.php">Our Services</a>
          </li>
          <li class="nav-item <?= ($currentPage == 'ContactUs.php') ? 'active' : '' ?>">
            <a class="nav-link" href="ContactUs.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

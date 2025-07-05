<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Thank You - Bhagyoday Industries</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f7f9fb, #e8f0f5);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .thank-you-card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
      padding: 50px 40px;
      text-align: center;
      max-width: 500px;
      width: 100%;
    }

    .thank-you-icon {
      width: 70px;
      height: 70px;
      background-color: #28a745;
      border-radius: 50%;
      margin: 0 auto 25px auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .thank-you-icon i {
      color: #fff;
      font-size: 32px;
    }

    h1 {
      font-weight: 700;
      font-size: 28px;
      margin-bottom: 10px;
      color: #2c3e50;
    }

    p {
      font-size: 16px;
      color: #666;
      margin-bottom: 30px;
    }

    .btn-home {
      background-color: #28a745;
      border: none;
      padding: 10px 28px;
      border-radius: 30px;
      font-size: 16px;
      font-weight: 500;
      color: #fff;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn-home i {
      margin-left: 8px;
    }

    .btn-home:hover {
      background-color: #218838;
    }
  </style>
</head>

<body>
  <div class="thank-you-card">
    <div class="thank-you-icon">
      <i class="fas fa-check"></i>
    </div>
    <h1>Thank You!</h1>
    <p>Your message has been successfully submitted.<br>
      We will get back to you as soon as possible.</p>
    <a href="index.php" class="btn-home">
      Return Home <i class="fas fa-arrow-right"></i>
    </a>
  </div>
  
</body>
</html>

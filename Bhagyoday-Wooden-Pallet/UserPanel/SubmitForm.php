<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = nl2br(htmlspecialchars($_POST['message']));

  // 🔒 You can store this into a database here if needed.

  // ✅ Redirect to thank you page
  header("Location: ThankYou.php");
  exit();
} else {
  echo "Invalid request.";
}
?>

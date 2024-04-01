<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mariano</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<style>
    .form_container {
position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.form_container_box {
  max-width: 600px;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  font-family: 'Barlow Condensed', sans-serif;
  font-size: 28px;
  color: #333;
  margin-bottom: 20px;
}

p {
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 20px;
}

form {
  margin-top: 20px;
}

input,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

.success-message {
  color: green;
  font-size: 16px;
}
</style>
<body>
    <nav>
        <ul>
            <li class="right-align"><a href="index.html"></i>About</a></li>
            <li class="right-align"><a href="#portfolio"></i>Portfolio</a></li>
            <li class="right-align"><a href="contact_form.php"></i>Contact</a></li>
        </ul>
    </nav>

    <div class="form_container">
        <div class="form_container_box">
            <h2>Contact Me</h2>
            <p>
                
            </p>

            <?php
            if (isset($_GET['success']) && $_GET['success'] === 'true') {
                echo '<p class="success-message">Thank you! Your message has been sent successfully!</p>';
            }
            ?>
            <form action="send_email.php" method="post">

                <input type="text" name="name" id="name" placeholder="Your Name" required>
                <input type="email" name="email" id="email" placeholder="Your Email" required>
                <textarea name="message" id="message" placeholder="Your Message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>Email: amariano1989@gmail.com</p>
            <p>Phone: +639185598128</p>
        </div>
    </footer>

</body>
</html>

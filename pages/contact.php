<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="../styles/style.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
  />
  <!-- fontawesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
  />

  <link rel="icon" type="image/png" href="../assets/favicon.png" />

  <!-- style questions -->
  <link rel="stylesheet" href="../styles/stylequiz.css" />

  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  />

  <link rel="stylesheet" href="../styles/stylefont.css" />
  <link rel="stylesheet" href="../styles/styletimer.css" />
  <link rel="stylesheet" href="../styles/stylefooter.css" />


  <title>Contact Form</title>
  <style>
        * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.from-1 {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  width: 300px;
  justify-content: center;
  align-items: center;
}

    /* Style for text input */
    input[type="text"], 
    input[type="email"]
     {
        width: 50%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 16px;
    }
    textarea {
      width: 50%;
      height: 300px;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 16px;
    }

    /* Style for submit button */
    button {
  background-color: #465c70;
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
  border-radius: 10px;
  width: 15%;
}

button:hover {
  background-color: rgb(43, 48, 53);
}
button:active{
  background-color: #85271e;
}
    /* Optional: Style for hidden botcheck field */
    input.hidden {
        display: none;
    }
  </style>
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar-brand mx-4" href="../first.php">
      <span style="color:rgb(58, 128, 87); font-weight: bolder; font-size: 30px; font-family: 'Courier New', Courier, monospace;">Q</span>uizHunt
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mx-4">
              <li class="nav-item">
                  <a class="nav-link" href="../first.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="playquiz.php">Quizzes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>  
          </ul>
    </div>
    <a class="nav-link ml-auto text-white" href="login.php"> Logout 
      <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
      </a>
  </nav>

  <center>
    <div class="form-1">
      <!-- <form action="https://api.web3forms.com/submit" method="POST"> -->

        <form action="contact.php" method="POST">
          <input type="hidden" name="access_key" value="d1691ded-debf-4276-aed7-8dd3cecc25ff">
          <input type="text" name="name" id="name" class="taxt" placeholder="Your Name" required>

          <input type="email" name="email" id="email" class="text" placeholder="Your Email" required>

          <textarea name="message" id="message" placeholder="Your Message" required></textarea>
          <br>
          <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
          <button type="submit" id="submit" name="submit" style="width: 30%;">Submit Form</button>

          <br><br>
      </form>
    </div>
  </center>

  <footer>
    <div class="footer-top bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase">About Us</h4>
                    <p>
                        QuizHunt is a platform that offers engaging quizzes on various tech and programming topics.
                        We strive to make learning interactive, fun, and accessible for everyone.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="../first.php" class="text-white">Home</a></li>
                        <li><a href="playquiz.php" class="text-white">Quizzes</a></li>
                        <li><a href="about.php" class="text-white">About Us</a></li>
                        <li><a href="contact.php" class="text-white">Contact Us</a></li>
                        <li><a href="login.php" class="text-white">Login</a></li>
                    </ul>
                </div>

                <!-- Social Media Links -->
                <div class="col-lg-4 col-md-12">
                    <h4 class="text-uppercase">Follow Us</h4>
                    <p>Connect with us on social media</p>
                    <div class="social-links">
                        <a href="#" class="text-white mx-2"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom bg-secondary text-white text-center py-3">
        <p class="mb-0">© 2024 QuizHunt | All Rights Reserved.</p>
        <p class="mb-0">
            Designed by <a href="#" class="text-white">Kamlesh Modi Team</a>
        </p>
    </div>
</footer>

  <!-- Optional JavaScript -->
  <script src="../quizzes/mlquiz.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script
    src="../scripts/jquery-3.2.1.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="../scripts/popper.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="../scripts/bootstrap.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>

<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $sql = "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo "<script>alert('Record inserted successfully!');</script>";
  } else {
    echo "<script>alert('Database error!');</script>";
  }
}
?>

</body>

</html>

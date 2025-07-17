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
  href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
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


  <title>DBMS : QuizHunt</title>
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar-brand mx-4" href="../first.php"><span style="color:rgb(58, 128, 87); font-weight: bolder; font-size: 30px; font-family: 'Courier New', Courier, monospace;">Q</span>uizHunt</a>
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

  <div class="timer-container">
  <div class="circle">
    <span id="timer">10</span>
    <div class="left-half-clipper">
      <div class="first-half"></div>
      <div class="second-half"></div>
    </div>
  </div>
</div>


  <div class="container">
        <h2 class="text-center mb-4">DBMS Quiz</h2>
    
    <div class="jumbotron">
      <div class="quiz-container" id="quiz">
        <div class="quiz-header">
          <h3 id="question">Question</h3>
          <ul class="unorderlist">
            <li>
              <input type="radio" name="answer" id="a" class="answer">
              <label for="a" id="a_text">Answer</label>
            </li>
    
            <li>
              <input type="radio" name="answer" id="b" class="answer">
              <label for="b" id="b_text">Answer</label>
            </li>
    
            <li>
              <input type="radio" name="answer" id="c" class="answer">
              <label for="c" id="c_text">Answer</label>
            </li>
    
            <li>
              <input type="radio" name="answer" id="d" class="answer">
              <label for="d" id="d_text">Answer</label>
            </li>
          </ul>
        </div>
        <button id="submit">Submit</button>
      </div> 
    <center><label for="text" style="margin-top :30px;">More Quizzes are here - <a href="./playquiz.php">Click Here</a></label></center>
    </div>
  </div><br>


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
  <script src="../quizzes/dbmsquiz.js"></script>

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
</body>

</html>

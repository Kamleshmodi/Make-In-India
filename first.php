<?php
session_start();
include("pages/connect.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="QuizHunt is a quiz website that offers quizzes on programming languages such as C, C++, Java, Linux, and operating systems."
    />
    <meta
      name="keywords"
      content="quiz, website, programming languages, C, C++, Java, Linux, operating systems"
    />
    <meta name="author" content="QuizHunt" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="styles/style.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />

    <link rel="icon" type="image/png" href="assets/favicon.png" />

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="styles/stylefont.css" />
    <link rel="stylesheet" href="styles/stylefooter.css" />

    <title>QuizHunt</title>
    <style>
      @media screen and (max-width: 680px) {
        .A {
          flex: 100%;
        }
        .B {
          flex: 100%;
        }
        .image {
          display: none;
        }
      }
    </style>
  </head>

  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand mx-4" href="./first.php"
        ><span
          style="
            color: rgb(58, 128, 87);
            font-weight: bolder;
            font-size: 30px;
            font-family: 'Courier New', Courier, monospace;
          "
          >Q</span
        >uizHunt</a
      >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mx-4">
          <li class="nav-item active">
            <a class="nav-link" href="./first.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/playquiz.php">Quizzes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/new_quiz.php">New-Quiz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/about.php">about-us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
      <a class="nav-link ml-auto text-white" href="admin/index.php"> Admin-Login 
      <i class="bi bi-person-circle" style="color: #ffffff;"></i>
      </a>
      <a class="nav-link ml-auto text-white" href="pages/login.php"> Logout 
      <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
      </a>
    </nav>

    <!-- Jumbotron -->
    <div class="header px-4 py-5 bg-dark mb-5">
      <div class="" style="height: 500px; border-radius: 20px">
        <div
          class="headtext d-flex px-4 align-items-center justify-content-around h-100"
        >
          <div class="text-white">
            <h1 class="mb-3" style="text-shadow: 4px 4px 8px #000000">
              Be ready. Be smart. Be noticed!
            </h1>
            <h3 class="mb-2" style="color: rgb(58, 128, 87)">
              Where a smart answer won't get you fired!
            </h3>
            <p class="mb-3">
              QuizHunt brings you quizzes to simplify tech learning.<br />
              Just play a quiz.
            </p>
            <a class="btn btn-light btn-md" href="pages/mega.php">Quick Start</a>
          </div>
          <div class="image">
            <img src="assets/image1.png" alt="vector" width="400" />
          </div>
        </div>
      </div>
    </div>



    <!-- Jumbotron -->
    <center><h2>Popular Quizzes</h2></center>
    <br />
    <div class="con">
      <div
        class="A"
        style="
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
          margin: 10px;
        "
      >
        <div
          style="
            width: 50%;
            background-color: darkcyan;
            padding: 150px 100px;
            text-align: center;
            flex: 1;
            position: relative;
            margin: 15px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
              0 6px 20px 0 rgba(0, 0, 0, 0.19);
          "
        >
          <!-- <h1 class="text-white">C Quiz</h1> -->
          <img
            width="96"
            height="96"
            src="https://img.icons8.com/fluency/144/c-programming.png"
            alt="c-programming"
          />
          <p>C Quiz</p>

          <a href="pages/clanguage.php" class="btn btn-dark px-4">Start</a>
        </div>

        <div
          style="
            width: 50%;
            background-color: rgb(189, 54, 54);
            padding: 150px 100px;
            text-align: center;
            flex: 1;
            position: relative;
            margin: 15px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
              0 6px 20px 0 rgba(0, 0, 0, 0.19);
          "
        >
          <!-- <h1 class="text-white" >C++ Quiz</h1> -->
          <img
            width="96"
            height="96"
            src="https://img.icons8.com/fluency/96/c-plus-plus-logo.png"
            alt="c-plus-plus-logo"
          />
          <p>C++ Quiz</p>
          <a href="pages/cpp.php" class="btn btn-dark px-4">Start</a>
        </div>
      </div>

      <div
        class="B"
        style="
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
          margin: 10px;
          align-items: center;
        "
      >
        <div
          style="
            width: 50%;
            background-color: rgb(170, 142, 15);
            padding: 150px 100px;
            text-align: center;
            flex: 1;
            position: relative;
            margin: 15px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
              0 6px 20px 0 rgba(0, 0, 0, 0.19);
          "
        >
          <!-- <h1 class="text-white">Java Quiz</h1> -->
          <img
            width="96"
            height="96"
            src="https://img.icons8.com/color/96/java-coffee-cup-logo--v1.png"
            alt="java-coffee-cup-logo--v1"
          />
          <p>Java Quiz</p>
          <a href="pages/java.php" class="btn btn-dark px-4">Start</a>
        </div>
        <div
          style="
            width: 50%;
            background-color: rgb(123, 12, 175);
            padding: 150px 100px;
            text-align: center;
            flex: 1;
            position: relative;
            margin: 15px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
              0 6px 20px 0 rgba(0, 0, 0, 0.19);
          "
        >
          <!-- <h1 class="text-white">Python Quiz</h1> -->
          <img
            width="96"
            height="96"
            src="https://img.icons8.com/color/96/python--v1.png"
            alt="python--v1"
          />
          <p>Python Quiz</p>
          <a href="pages/python.php" class="btn btn-dark px-4">Start</a>
        </div>
      </div>
    </div>

    <center>
      <a
        class="btn btn-dark btn-lg my-4 px-5 py-1"
        href="./pages/playquiz.php"
        role="button"
        >More</a
      >
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
                        <li><a href="first.php" class="text-white">Home</a></li>
                        <li><a href="pages/playquiz.php" class="text-white">Quizzes</a></li>
                        <li><a href="pages/about.php" class="text-white">About Us</a></li>
                        <li><a href="pages/contact.php" class="text-white">Contact Us</a></li>
                        <li><a href="pages/login.php" class="text-white">Login</a></li>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="scripts/jquery-3.2.1.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="scripts/popper.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="scripts/bootstrap.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

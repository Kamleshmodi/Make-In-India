<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

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
    <link rel="stylesheet" href="../styles/stylefooter.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../styles/stylefont.css" />

    <style>
        body {
            font-family: 'Rubik', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .btn {
            width: 200px;
            padding: 12px;
            background-color: #465c70;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin: 0 10px;
            text-align: center;
            text-decoration: none;
        }

        .btn:hover {
            background-color: rgb(43, 48, 53);
        }

        .btn:active {
            background-color: #85271e;
        }

        footer {
            background-color: #343a40;
            color: #6c757d;
            padding: 20px;
            text-align: center;
        }

        footer h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bolder;
            font-size: 50px;
            margin-bottom: 10px;
        }

        footer p {
            margin: 0;
        }
    </style>
    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mx-4" href="./first.php">
            <span style="color: rgb(58, 128, 87); font-weight: bolder; font-size: 30px; font-family: 'Courier New', Courier, monospace;">
                Q</span>uizHunt
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mx-4">
            <li class="nav-item">
                    <a class="nav-link" href="../first.php">Home</a>
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
            </ul>
        </div>
        <a class="nav-link ml-auto text-white" href="login.php"> Logout 
      <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
      </a>
    </nav>

    <header class="header">
        <h1>New Update</h1>
    </header>

    <main class="content">
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

    
    </main>



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
    <script src="scripts/jquery-3.2.1.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="scripts/popper.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="scripts/bootstrap.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

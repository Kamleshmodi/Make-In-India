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


    <title>Play : QuizHunt</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
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
    
    <div class="alert alert-success" role="alert">
        All quizzes are here!
    </div>
      
  <div class="con">
    <div class="A" style="display: flex; justify-content: center; flex-wrap: wrap; margin: 10px;">
        <div style="width: 50%; background-color: rgb(0, 139, 63);  padding: 150px 100px 150px 100px; text-align: center; flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
           <!-- <h1 class="text-white">Linux Quiz</h1> -->
           <img width="96" height="96" src="https://img.icons8.com/color/96/linux--v1.png" alt="linux--v1"/>
           <p>Linux Quiz</p>
           <a href="./linux.php" class="btn btn-dark px-4 ">Start</a>
      </div>
      
      <div style="width: 50%; background-color: rgb(243, 111, 111);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
            <!-- <h1 class="text-white" >JS Quiz</h1> -->
            <img width="96" height="96" src="https://img.icons8.com/color/96/javascript--v1.png" alt="javascript--v1"/>
            <p>JavaScript Quiz</p>
            <a href="./javascript.php" class="btn btn-dark px-4 ">Start</a>
      </div>
    </div>
    <div class="B" style="display: flex; justify-content: center; flex-wrap: wrap; margin: 10px;">
      <div style="width: 50%; background-color: rgb(152, 197, 28);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
         <!-- <h1 class="text-white">ML Quiz</h1> -->
         <img width="96" height="96" src="https://img.icons8.com/color-glass/96/artificial-intelligence.png" alt="artificial-intelligence"/>
         <p>Machine Learning Quiz</p>
         <a href="./ml.php" class="btn btn-dark px-4 ">Start</a>
      </div>
      <div style="width: 50%; background-color: rgb(190, 78, 121);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <!-- <h1 class="text-white">DBMS Quiz</h1> -->
          <img width="96" height="96" src="https://img.icons8.com/color/96/microsoft-access-2019.png" alt="microsoft-access-2019"/>
          <p>DBMS Quiz</p>
           <a href="./dbms.php" class="btn btn-dark px-4 ">Start</a>
      </div>
    </div>
    <div class="A" style="display: flex; justify-content: center; flex-wrap: wrap; margin: 10px;">
      <div style="width: 50%; background-color: darkcyan;  padding: 150px 100px 150px 100px; text-align: center; flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
         <!-- <h1 class="text-white">C Quiz</h1> -->
         <img width="96" height="96" src="https://img.icons8.com/fluency/144/c-programming.png" alt="c-programming"/>
         <p>C Quiz</p>
         <a href="./clanguage.php" class="btn btn-dark px-4 ">Start</a>
    </div>
    
    <div style="width: 50%; background-color: rgb(189, 54, 54);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
         <!-- <h1 class="text-white" >C++ Quiz</h1> -->
         <img width="96" height="96" src="https://img.icons8.com/fluency/96/c-plus-plus-logo.png" alt="c-plus-plus-logo"/>
         <p>C++ Quiz</p>
          <a href="./cpp.php" class="btn btn-dark px-4 ">Start</a>
    </div>
  </div>
  <div class="B" style="display: flex; justify-content: center; flex-wrap: wrap; margin: 10px;">
    <div style="width: 50%; background-color: rgb(170, 142, 15);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <!-- <h1 class="text-white">Java Quiz</h1> -->
      <img width="96" height="96" src="https://img.icons8.com/color/96/java-coffee-cup-logo--v1.png" alt="java-coffee-cup-logo--v1"/>
      <p>Java Quiz</p>
       <a href="./java.php" class="btn btn-dark px-4 ">Start</a>
    </div>
    <div style="width: 50%; background-color: rgb(123, 12, 175);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <!-- <h1 class="text-white">Python Quiz</h1> -->
        <img width="96" height="96" src="https://img.icons8.com/color/96/python--v1.png" alt="python--v1"/>
        <p>Python Quiz</p>
         <a href="./python.php" class="btn btn-dark px-4 ">Start</a>
    </div>
  </div>
  <div class="A" style="display: flex; justify-content: center; flex-wrap: wrap; margin: 10px;">
    <div style="width: 50%; background-color: rgb(139, 81, 0);  padding: 150px 100px 150px 100px; text-align: center; flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       <!-- <h1 class="text-white">PHP Quiz</h1> -->
       <img width="90" height="90" src="https://img.icons8.com/officel/80/php-logo.png" alt="php-logo"/>
       <p>PHP Quiz</p>
       <a href="./php.php" class="btn btn-dark px-4 ">Start</a>
  </div>
  
  <div style="width: 50%; background-color: rgb(85, 153, 131);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
        <!-- <h1 class="text-white" >OS Quiz</h1> -->
        <img width="96" height="96" src="https://img.icons8.com/fluency/96/operating-system.png" alt="operating-system"/>
        <p>Operating System Quiz</p>
        <a href="./os.php" class="btn btn-dark px-4 ">Start</a>
  </div>
</div>
  <div class="A" style="display: flex; justify-content: center; flex-wrap: wrap; margin: 10px;">
    <div style="width: 50%; background-color: rgb(0, 95, 139);  padding: 150px 100px 150px 100px; text-align: center; flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       <!-- <h1 class="text-white">DSA Quiz</h1> -->
       <img width="96" height="96" src="https://img.icons8.com/color/96/add-node.png" alt="add-node"/>
       <p>Data Structure Quiz</p>
       <a href="./ds.php" class="btn btn-dark px-4 ">Start</a>
  </div>
  
  <div style="width: 50%; background-color: rgb(153, 85, 85);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
        <!-- <h1 class="text-white" >CN Quiz</h1> -->
        <img width="80" height="80" src="https://img.icons8.com/external-filled-outline-design-circle/64/external-Computer-Network-network-and-communication-filled-outline-design-circle.png" alt="external-Computer-Network-network-and-communication-filled-outline-design-circle"/>
        <p>Computer Network Quiz</p>
        <a href="./cn.php" class="btn btn-dark px-4 ">Start</a>
  </div>
</div>
<div class="B" style="display: flex; justify-content: center; flex-wrap: wrap; margin: 10px;">
  <div style="width: 50%; background-color: rgb(158, 135, 84);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
     <!-- <h1 class="text-white">Cyber S. Quiz</h1> -->
     <img width="96" height="96" src="https://img.icons8.com/matisse/100/cyber-security--v2.png" alt="cyber-security--v2"/>
     <p>Cyber Security Quiz</p>
     <a href="./cs.php" class="btn btn-dark px-4 ">Start</a>
  </div>
  <div style="width: 50%; background-color: rgb(161, 99, 141);  padding: 150px 100px 150px 100px; text-align: center;  flex: 1; position: relative; margin: 15px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <!-- <h1 class="text-white">COA Quiz</h1> -->
      <img width="100" height="100" src="https://img.icons8.com/stickers/100/my-computer.png" alt="my-computer"/>
      <p>Computer Architecture Quiz</p>
       <a href="./co.php" class="btn btn-dark px-4 ">Start</a>
  </div>
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
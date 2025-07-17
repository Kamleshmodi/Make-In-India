<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quizhunt || Admin Panal</title>
    
    <link rel="stylesheet" href="css/style1.css">
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
        <link rel ="stylesheet" href="css/header.css">
</head>
<body>


    <div class="header">

        <div class="nav-bar">
            <div class="nav-div">
            <a href="membars.php" style="text-decoration: none; color: white;" class="logo"><img src="image/logo.png" alt="logo" class="logo-img"></a>
            </div>
            <ul>
                <li><a href="home.php" class="text-decoration-none text-white">Home</a> </li>
                <li><a href="quize.php" class="text-decoration-none text-white">Add-Section</a> </li>
                <li><a href="add-quiz.php" class="text-decoration-none text-white">Add-Quiz</a> </li>
                <li><a href="#" class="text-decoration-none text-white">About</a> </li>
                <li><a href="../first.php" class="text-decoration-none text-white">Website</a> </li>
                <li><a href="logout.php" class="text-decoration-none text-white"><i class="fas fa-sign-in-alt">&nbsp;&nbsp;</i>Logout</a></li>
          </ul>
        </div>

        <div class="side-nav">
            <div class="user">
                <img src="image/user1.png" alt="user" class="user-img"> 
                <div>
                <h2 style="color: white;">Kamlesh Modi</h2>
                <p style="color: white;">kamleshmodi7878@gmail.com</p>
                </div>
            <img src="image/star.png" alt="star" class="star-img">
            </div>
            <ul>
             <!-- <li><a href="user.php"  style="text-decoration: none; color: black;"><img src="image/person-circle.svg" alt="user-img" class="rewards-img"> Admin-Login</a></li>-->
             <li><a href="user.php"  style="text-decoration: none; color: black;"><img src="image/person-circle.svg" alt="user-img" class="rewards-img"> Admin-Login</a></li>
                <li><a href="database.php"  style="text-decoration: none; color: black;"><img src="image/database-fill-add.svg" alt="database" class="database"> Usar-Login</a></li>
                <li><a href="delete_section.php"  style="text-decoration: none; color: black;"><img src="image/archive-fill.svg" alt="delete" class="delete"> Delete Section</a></li>
                <li><a href="delete_quiz.php"  style="text-decoration: none; color: black;"><img src="image/archive-fill.svg" alt="delete" class="delete"> Delete Quiz</a></li>
                <li><a href="message.php"  style="text-decoration: none; color: black;"><img src="image/envelope-fill.svg" alt="messages" class="messages-img"> Messages</a></li>
                <li><a href="membars.php"  style="text-decoration: none; color: black;"><img src="image/members.png" alt="members" class="members-img"> Members</a></li>
            </ul>
            <ul>
                <li><a href="index.php"  style="text-decoration: none; color: black;"><img src="image/logout.png" alt="logout" class="logout-img"> Logout</a></li>
            </ul>
        </div>
    </div>
        <!-- main section -->
<div class="main">
    <div class="container">

    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="question.js"></script>

</body>
</html>
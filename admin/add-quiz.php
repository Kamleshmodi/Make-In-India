<?php
    include 'connect.php';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quiz Code || Admin Panel</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/add-quiz.css">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel ="stylesheet" href="css/header.css">
</head>
<body>

    <div class="header">
        <div class="nav-bar">
            <div class="nav-div">
                <a href="add-quiz.php" style="text-decoration: none; color: white;" class="logo"><img src="image/logo.png" alt="logo" class="logo-img"></a>
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

    <div class="main">
        <div class="container" style="margin-top:300px;">
            <div class="row">
                <div class="col-md-6 m-auto border border-green">
                    <form action="add-quiz.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <p class="text-center fw-bold fs-3 text-white">Add your Question</p>
                        </div>

                        <div class="mb-3"> 
                            <label class="form-label text-white">Select your Subject Name:</label>
                            <select class="form-select" name="subject" id="Subject" required>
                                <option value="Select">Select Subject Name : </option>
                                <option value="clanguage">C Language</option>
                                <option value="cpp">C++</option>
                                <option value="java">Java</option>
                                <option value="python">Python</option>
                                <option value="php">PHP</option>
                                <option value="javascript">JavaScript</option>
                                <option value="linux">Linux</option>
                                <option value="os">Operating System</option>
                                <option value="mi">Machine Learning</option>
                                <option value="dbms">DBMS</option>
                                <option value="ds">Data Structures</option>
                                <option value="cn">Computer Network</option>
                                <option value="cs">Cyber Security</option>
                                <option value="co">Computer Organization</option>
                            </select>    
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">Enter your Question:</label>
                            <input type="text" name="question" id="Question" class="form-control" placeholder="Enter the Question" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Option 1:</label>
                            <input type="text" name="op1" id="op1" class="form-control" placeholder="Enter Option 1" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Option 2:</label>
                            <input type="text" name="op2" id="op2" class="form-control" placeholder="Enter Option 2" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Option 3:</label>
                            <input type="text" name="op3" id="op3" class="form-control" placeholder="Enter Option 3" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Option 4:</label>
                            <input type="text" name="op4" id="op4" class="form-control" placeholder="Enter Option 4" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Correct Option:</label>
                            <input type="text" name="correct" id="correct" class="form-control" placeholder="Enter the Correct Option" required>
                        </div>

                        <div class="button text-center">
                            <button name="submit" id="submit" class="fs-4 fw-bold my-3 w-50">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="question.js"></script>

    <?php
        if (isset($_POST['submit'])) {
            // Retrieve form data
            $Subject = $_POST['subject'];
            $Question = $_POST['question'];
            $op1 = $_POST['op1'];
            $op2 = $_POST['op2'];
            $op3 = $_POST['op3'];
            $op4 = $_POST['op4'];
            $correct = $_POST['correct'];

            // Insert data into the database (Replace 'quiz_questions' with your actual table name)
            $sql = "INSERT INTO add_quiz (subject, question, op1, op2, op3, op4, correct) VALUES ('$Subject', '$Question', '$op1', '$op2', '$op3', '$op4', '$correct')";

            if (mysqli_query($conn, $sql)) {
                echo "alert('Data inserted successfully!')";
            } else {
                echo "alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "')";
            }
        }
    ?>
</body>
</html>

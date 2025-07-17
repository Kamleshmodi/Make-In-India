<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Code || Admin Panel</title>
    
    <link rel="stylesheet" href="css/style1.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel ="stylesheet" href="css/header.css">
</head>
<body>
    <div class="header">
        <div class="nav-bar">
            <div class="nav-div">
                <a href="quize.php" class="logo">
                    <img src="image/logo.png" alt="logo" class="logo-img">
                </a>
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
        <div class="container" style="margin-top:0px;">
            <!-- Form Section -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center text-white">Create Quiz Section</h3>
                    <form method="POST" enctype="multipart/form-data" class="mt-4 p-4 border rounded">
                        <div class="mb-3">
                            <label for="section-name" class="form-label text-white">Quiz Section</label>
                            <input type="text" class="form-control" name="section_name" id="section_Name" placeholder="Enter quiz section" required>
                        </div>
                        <div class="mb-3">
                            <label for="section-image" class="form-label text-white">Quiz Image</label>
                            <input type="file" class="form-control" name="section_image" id="section_Image" placeholder="select quiz image" required>
                        </div>
                        <div class="col text-center">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary w-50 mt-3 text-white">Create Quiz Section</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

    <?php
        // Include database connection
        include 'connect.php'; 

        if (isset($_POST['submit'])) {
            // Retrieve form data
            $quizSection = $_POST['section_name'];
            $image = $_FILES['section_image']['name'];
            $imageTempName = $_FILES['section_image']['tmp_name'];

            // Set upload directory
            $uploadDir = "uploads/";
            $imageDestination = $uploadDir . basename($image);

            // Move uploaded file to the upload directory
            move_uploaded_file($imageTempName, $imageDestination);

            // Insert data into the database
            $sql = "INSERT INTO add_section (section_Name, section_Image) VALUES ('$quizSection', '$image')";

            if (mysqli_query($conn, $sql)) {
                echo "alert('Data inserted successfully!')";
            } else {
                echo "alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "')";
            }
        }
    ?>
</body>
</html>

<?php
require_once("connect.php");

// Handle quiz question delete
if (isset($_GET['delete_quiz_id'])) {
    $delete_quiz_id = $_GET['delete_quiz_id'];

    // Prepared statement for deletion
    $delete_sql = "DELETE FROM add_quiz WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_quiz_id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Question deleted successfully!'); window.location.href='delete_quiz.php';</script>";
    } else {
        echo "Error deleting question: " . $stmt->error;
    }
}

// Handle quiz question edit form submission
if (isset($_POST['update_quiz'])) {
    $edit_id = $_POST['edit_id'];
    $subject = $_POST['subject'];
    $question = $_POST['question'];
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op3 = $_POST['op3'];
    $op4 = $_POST['op4'];
    $correct = $_POST['correct'];

    // Prepared statement for update
    $update_sql = "UPDATE add_quiz SET Subject=?, Question=?, op1=?, op2=?, op3=?, op4=?, correct=? WHERE id=?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sssssisi", $subject, $question, $op1, $op2, $op3, $op4, $correct, $edit_id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Question updated successfully!'); window.location.href='delete_quiz.php';</script>";
    } else {
        echo "Error updating question: " . $stmt->error;
    }
}

// Fetch question details if the page is loaded for editing a quiz
$edit_quiz = null;
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    // Prepared statement for fetching edit details
    $sql = "SELECT * FROM add_quiz WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $edit_quiz = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Code || Admin Panel</title>
    
    <link rel="stylesheet" href="css/style1.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel ="stylesheet" href="css/header.css">

    <style>
        i {
            color: black;
        }
        table {
            position: top;
            border-collapse: collapse;
            width: 80%;
            float: left; /* Position the table to the left */
            margin-left: 140px; /* Adds space to the right */
            background-color : gray;
        }

        /* tr:nth-child(even) {
            background-color: none;
        } */
        th {
            background-color: white;
            color: white;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
        }
        td {
            background-color: white;
            color : white;
        }
        h2 {
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="nav-bar">
            <div class="nav-div">
                <a href="delete_section.php" style="text-decoration: none; color: white;" class="logo"><img src="image/logo.png" alt="logo" class="logo-img"></a>
            </div>
            <ul>
                <li><a href="home.php" class="text-decoration-none text-white">Home</a></li>
                <li><a href="quize.php" class="text-decoration-none text-white">Add-Section</a></li>
                <li><a href="add-quiz.php" class="text-decoration-none text-white">Add-Quiz</a></li>
                <li><a href="#" class="text-decoration-none text-white">About</a></li>
                <li><a href="../first.php" class="text-decoration-none text-white">Website</a></li>
                <li><a href="logout.php" class="text-decoration-none text-white"><i class="fas fa-sign-in-alt text-white">&nbsp;&nbsp;</i>Logout</a></li>
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
                <li><a href="user.php" style="text-decoration: none; color: black;"><img src="image/person-circle.svg" alt="user-img" class="rewards-img"> Admin-Login</a></li>
                <li><a href="database.php" style="text-decoration: none; color: black;"><img src="image/database-fill-add.svg" alt="database" class="database"> User-Login</a></li>
                <li><a href="delete_section.php" style="text-decoration: none; color: black;"><img src="image/archive-fill.svg" alt="delete" class="delete"> Delete Section</a></li>
                <li><a href="delete_quiz.php" style="text-decoration: none; color: black;"><img src="image/archive-fill.svg" alt="delete" class="delete"> Delete Quiz</a></li>
                <li><a href="message.php" style="text-decoration: none; color: black;"><img src="image/envelope-fill.svg" alt="messages" class="messages-img"> Messages</a></li>
                <li><a href="membars.php" style="text-decoration: none; color: black;"><img src="image/members.png" alt="members" class="members-img"> Members</a></li>
            </ul>
            <ul>
                <li><a href="index.php" style="text-decoration: none; color: black;"><img src="image/logout.png" alt="logout" class="logout-img"> Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Main section for displaying sections -->
    <div class="main">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    <h2 class="text-white text-center">Quiz Questions</h2>
                    <table class="table table-bordered text-white">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Question</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Correct Option</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Fetch questions from the database
                            $sql = "SELECT * FROM add_quiz";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['Subject'] . "</td>";
                                    echo "<td>" . $row['Question'] . "</td>";
                                    echo "<td>" . $row['op1'] . "</td>";
                                    echo "<td>" . $row['op2'] . "</td>";
                                    echo "<td>" . $row['op3'] . "</td>";
                                    echo "<td>" . $row['op4'] . "</td>";
                                    echo "<td>" . $row['correct'] . "</td>";
                                    echo "<td>
                                            <a href='delete_quiz.php?edit_id=" . $row['id'] . "' class='btn btn-warning'><i class='fa fa-edit'></i></a>
                                            <a href='delete_quiz.php?delete_quiz_id=" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                          </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='9' class='text-center'>No questions found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>

                    <!-- Edit Quiz Form -->
                    <div class="edit_quiz" style="width: 500px; margin: 0 auto; padding: 20px; border-radius: 10px; display: <?php echo $edit_quiz ? 'block' : 'none'; ?>;">
                    <?php if ($edit_quiz): ?>
                        <h3 class="text-white text-center">Edit Quiz</h3>
                        <form action="delete_quiz.php" method="POST" class="form-control bg-dark text-white p-4">
                            <input type="hidden" name="edit_id" value="<?php echo $edit_quiz['id']; ?>">
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" name="subject" value="<?php echo $edit_quiz['Subject']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="question" class="form-label">Question</label>
                                <input type="text" name="question" value="<?php echo $edit_quiz['Question']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="op1" class="form-label">Option 1</label>
                                <input type="text" name="op1" value="<?php echo $edit_quiz['op1']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="op2" class="form-label">Option 2</label>
                                <input type="text" name="op2" value="<?php echo $edit_quiz['op2']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="op3" class="form-label">Option 3</label>
                                <input type="text" name="op3" value="<?php echo $edit_quiz['op3']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="op4" class="form-label">Option 4</label>
                                <input type="text" name="op4" value="<?php echo $edit_quiz['op4']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="correct" class="form-label">Correct Option</label>
                                <input type="text" name="correct" value="<?php echo $edit_quiz['correct']; ?>" class="form-control">
                            </div>
                            <button type="submit" name="update_quiz" class="btn btn-success">Update</button>
                        </form>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
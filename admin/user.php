<?php
require_once("connect.php");

// Delete Operation
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $sql_delete = "DELETE FROM admin_login WHERE id = '$delete_id'";
    if (mysqli_query($conn, $sql_delete)) {
        echo "<script>alert('Admin deleted successfully');</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Update Operation
if (isset($_POST['update_admin'])) {
    $edit_id = $_POST['edit_admin_id'];
    $edit_email = $_POST['edit_email'];
    $edit_password = $_POST['edit_password'];

    $sql_update = "UPDATE admin_login SET email='$edit_email', password='$edit_password' WHERE id='$edit_id'";

    if (mysqli_query($conn, $sql_update)) {
        echo "<script>alert('Admin updated successfully');</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Insert New Admin
if (isset($_POST['add_admin'])) {
    $new_email = $_POST['new_email'];
    $new_password = $_POST['new_password'];

    $sql_insert = "INSERT INTO admin_login (email, password) VALUES ('$new_email', '$new_password')";

    if (mysqli_query($conn, $sql_insert)) {
        echo "<script>alert('New Admin added successfully');</script>";
    } else {
        echo "Error adding new admin: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quiz Code || Admin Panal</title>
    
    <link rel="stylesheet" href="css/style1.css">
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel ="stylesheet" href="css/header.css">
        <style>
            i {
            color: black;
        }
        table{
            position: top;
            border-collapse: collapse;
            width: 80%;
            float: left; /* This will position the table to the left */
            margin-left: 200px; /* Optional: Adds space to the right */
        }

        tr:nth-child(even){background-color: #f2f2f2;}
        th {
            background-color: #4CAF50;  
            color: white;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
        }
        
        td{
            background-color: white;
        }
        h2{
            text-align: center;
            color: white;
        }

        
        </style>
    </head>
</head>
<body>


    <div class="header">

        <div class="nav-bar">
            <div class="nav-div">
            <a href="user.php" style="text-decoration: none; color: white;" class="logo"><img src="image/logo.png" alt="logo" class="logo-img"></a>
            </div>
            <ul>
                <li><a href="home.php" class="text-decoration-none text-white">Home</a> </li>
                <li><a href="quize.php" class="text-decoration-none text-white">Add-Section</a> </li>
                <li><a href="add-quiz.php" class="text-decoration-none text-white">Add-Quiz</a> </li>
                <li><a href="#" class="text-decoration-none text-white">About</a> </li>
                <li><a href="../first.php" class="text-decoration-none text-white">Website</a> </li>
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
                <li><a href="user.php"  style="text-decoration: none; color: black;"><img src="image/person-circle.svg" alt="user-img" class="rewards-img"> Admin-Login</a>
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
<!-- Main section -->
<div class="main">
    <div class="container">

        <!-- Add Admin Form (Initially hidden) -->
        <div id="addForm" style="display:none; width: 500px; height: 400px; margin: 0 auto; padding: 20px; border-radius: 10px;"style="display: none;">
            <h3>Add New Admin</h3>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="new_email" class="form-label text-white">Email</label>
                    <input type="email" class="form-control" name="new_email" id="new_email" required>
                </div>
                <div class="mb-3">
                    <label for="new_password" class="form-label text-white">Password</label>
                    <input type="text" class="form-control" name="new_password" id="new_password" required>
                </div>
                <button type="submit" class="btn btn-success" name="add_admin">Add Admin</button>
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('addForm').style.display='none'">Cancel</button>
            </form>
        </div>

        <!-- Edit Form (Initially hidden) -->
        <div id="editForm" style="display:none; width: 500px; height: 400px; margin: 0 auto; padding: 20px; border-radius: 10px;">
            <h3>Edit Admin</h3>
            <form method="POST" action="">
                <input type="hidden" name="edit_admin_id" id="edit_admin_id">
                <div class="mb-3">
                    <label for="edit_email" class="form-label text-white">Email</label>
                    <input type="email" class="form-control" name="edit_email" id="edit_email" required>
                </div>
                <div class="mb-3">
                    <label for="edit_password" class="form-label text-white">Password</label>
                    <input type="text" class="form-control" name="edit_password" id="edit_password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="update_admin">Update</button>
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('editForm').style.display='none'">Cancel</button>
            </form>
        </div>

        <h2>Admin Login</h2>
        
        <table border="2" cellpadding="10px" cellspacing="0">
            <tr>
                <th>AdminId</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>

            <?php
            $sql = "SELECT id, email, password FROM admin_login";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td>
                    <!-- Edit Button -->
                    <button class="btn btn-primary" onclick="editAdmin(<?php echo $row['id']; ?>, '<?php echo $row['email']; ?>', '<?php echo $row['password']; ?>')">Edit</button>

                    <!-- Delete Button -->
                    <a href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this admin?');">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }

            mysqli_close($conn);
            ?>
        
        <center>
            <button class="btn btn-success mb-3;" style ="text-align:center;" onclick="document.getElementById('addForm').style.display='block'">Add Admin</button>
        </center>
        </table>
    </div>
</div>

<script>
    // Function to populate the edit form
    function editAdmin(id, email, password) {
        document.getElementById('edit_admin_id').value = id;
        document.getElementById('edit_email').value = email;
        document.getElementById('edit_password').value = password;
        document.getElementById('editForm').style.display = 'block';
    }
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="question.js"></script>

</body>
</html>
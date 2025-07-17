<?php require_once("connect.php"); ?>  
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
        i { color: black; }
        table { border-collapse: collapse; width: 80%; float: left; margin-left: 200px; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        th { background-color: #4CAF50; color: white; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; }
        td { background-color: white; }
        h2 { text-align: center; color: white; }
        @media (max-width: 768px) {
            .table-container { overflow-x: auto; }
            table { width: 100%; }
        }
    </style>
</head>
<body>
<div class="header">
    <div class="nav-bar">
        <div class="nav-div">
            <a href="database.php" style="text-decoration: none; color: white;" class="logo"><img src="image/logo.png" alt="logo" class="logo-img"></a>
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

<!-- Main section -->
<div class="main">
    <div class="container">
        <h2>User Login</h2>

        <!-- Edit Form (hidden by default) -->
<!-- Edit Form (Initially hidden) -->
<div id="editForm" style="display:none; width: 500px; height: 400px; margin: 0 auto; padding: 20px; border-radius: 10px;">
    <h3>Edit User</h3>
    <form method="POST" action="">
        <input type="hidden" name="edit_user_id" id="edit_user_id">
        <div class="mb-3">
            <label for="edit_first_name" class="form-label text-white">First Name</label>
            <input type="text" class="form-control" name="edit_first_name" id="edit_first_name" required>
        </div>
        <div class="mb-3">
            <label for="edit_last_name" class="form-label text-white">Last Name</label>
            <input type="text" class="form-control" name="edit_last_name" id="edit_last_name" required>
        </div>
        <div class="mb-3">
            <label for="edit_email" class="form-label text-white">Email</label>
            <input type="email" class="form-control" name="edit_email" id="edit_email" required>
        </div>
        <button type="submit" class="btn btn-primary" name="update_user">Update</button>
        <button type="button" class="btn btn-secondary" onclick="document.getElementById('editForm').style.display='none'">Cancel</button>
    </form>
</div>


        <!-- User Table -->
        <table>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            // Fetch and display users
            $sql = "SELECT id, firstName, lastName, email FROM registration_form";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["firstName"]; ?></td>
                        <td><?php echo $row["lastName"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><button class="btn btn-primary btn-sm" onclick="editUser(<?php echo $row['id']; ?>, '<?php echo $row['firstName']; ?>', '<?php echo $row['lastName']; ?>', '<?php echo $row['email']; ?>')">Edit</button></td>
                        <td><form method="POST" action="" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            <input type="hidden" name="delete_user_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm" name="delete_user">Delete</button>
                        </form></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>0 results</td></tr>";
            }
            ?>
        </table>

        <?php
        // Handle delete operation
        if (isset($_POST['delete_user'])) {
            $delete_user_id = $_POST['delete_user_id'];
            $delete_sql = "DELETE FROM registration_form WHERE id='$delete_user_id'";
            if (mysqli_query($conn, $delete_sql)) {
                echo "<script>alert('User deleted successfully.');window.location.href='database.php';</script>";
            } else {
                echo "Error deleting user: " . mysqli_error($conn);
            }
        }

        // Handle edit (update) operation
        if (isset($_POST['update_user'])) {
            $edit_user_id = $_POST['edit_user_id'];
            $edit_first_name = $_POST['edit_first_name'];
            $edit_last_name = $_POST['edit_last_name'];
            $edit_email = $_POST['edit_email'];

            $update_sql = "UPDATE registration_form SET firstName='$edit_first_name', lastName='$edit_last_name', email='$edit_email' WHERE id='$edit_user_id'";
            if (mysqli_query($conn, $update_sql)) {
                echo "<script>alert('User updated successfully.');window.location.href='database.php';</script>";
            } else {
                echo "Error updating user: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
        ?>
    </div>
</div>

<script>
    // Edit User
    function editUser(id, firstName, lastName, email) {
        document.getElementById('edit_user_id').value = id;
        document.getElementById('edit_first_name').value = firstName;
        document.getElementById('edit_last_name').value = lastName;
        document.getElementById('edit_email').value = email;
        document.getElementById('editForm').style.display = 'block';
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="question.js"></script>

</body>
</html>

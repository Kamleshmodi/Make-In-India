<?php
require_once("connect.php");

// Delete section and its associated image
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Retrieve the image name from the database before deleting the record
    $sql_select = "SELECT section_Image FROM add_section WHERE id = '$delete_id'";
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_assoc($result);
    
    if ($row) {
        $image_path = "uploads/" . $row['section_Image']; // Assuming images are stored in the 'uploads' folder

        // Delete the image file from the server if it exists
        if (file_exists($image_path)) {
            unlink($image_path); // Delete the image file
        }

        // Delete the section from the database
        $sql_delete = "DELETE FROM add_section WHERE id = '$delete_id'";
        if (mysqli_query($conn, $sql_delete)) {
            echo "<script>alert('Section deleted successfully!'); window.location.href='delete_section.php';</script>";
        } else {
            echo "Error deleting section: " . mysqli_error($conn);
        }
    }
}

// Edit Section functionality
if (isset($_POST['update_section'])) {
    $section_id = $_POST['section_id'];
    $section_name = $_POST['section_name'];
    $new_image = $_FILES['new_image']['name'];

    if ($new_image) {
        // Upload new image and replace the old one
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["new_image"]["name"]);
        move_uploaded_file($_FILES["new_image"]["tmp_name"], $target_file);

        // Get the current image to delete the old one
        $sql_get_image = "SELECT section_Image FROM add_section WHERE id = '$section_id'";
        $result_image = mysqli_query($conn, $sql_get_image);
        $row_image = mysqli_fetch_assoc($result_image);
        $old_image_path = "uploads/" . $row_image['section_Image'];

        if (file_exists($old_image_path)) {
            unlink($old_image_path); // Delete the old image
        }

        // Update section with new image
        $sql_update = "UPDATE add_section SET section_Name = '$section_name', section_Image = '$new_image' WHERE id = '$section_id'";
    } else {
        // Update section without changing the image
        $sql_update = "UPDATE add_section SET section_Name = '$section_name' WHERE id = '$section_id'";
    }

    if (mysqli_query($conn, $sql_update)) {
        echo "<script>alert('Section updated successfully!'); window.location.href='delete_section.php';</script>";
    } else {
        echo "Error updating section: " . mysqli_error($conn);
    }
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
            margin-left: 200px; /* Adds space to the right */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
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
        td {
            background-color: white;
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
            <h2>Manage Quiz Sections</h2>
            <table border="2" cellpadding="10px" cellspacing="0">
                <tr>
                    <th>Id</th>
                    <th>Section Name</th>
                    <th style="width:300px">Image</th>
                    <th>Operations</th>
                </tr>
                <?php
                // Fetch sections from the database
                $sql = "SELECT id, section_Name, section_Image FROM add_section";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['section_Name'] . "</td>";
                        echo "<td><img src='uploads/" . $row['section_Image'] . "' alt='Section Image' width='100'></td>";
                        echo "<td>
                                <button class='btn btn-primary' onclick='editSection(" . $row['id'] . ", \"" . $row['section_Name'] . "\")'>
                                    <i class='fa fa-edit'></i> Edit
                                </button>
                                <a href='?delete_id=" . $row['id'] . "' title='Delete Record'>
                                    <button class='btn btn-danger'>
                                        <i class='fa fa-trash'></i> Delete
                                    </button>
                                </a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No sections found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="section_id" id="section_id">
                        <div class="mb-3">
                            <label for="section_name" class="form-label">Section Name</label>
                            <input type="text" class="form-control" name="section_name" id="section_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_image" class="form-label">Section Image (optional)</label>
                            <input type="file" class="form-control" name="new_image" id="new_image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="update_section">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Function to populate the edit modal
        function editSection(id, name) {
            document.getElementById('section_id').value = id;
            document.getElementById('section_name').value = name;
            var modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
// Close the connection after everything is done
mysqli_close($conn);
?>
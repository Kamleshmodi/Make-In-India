<?php
require_once("connect.php");

// Delete Contact
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // SQL query to delete the contact
    $sql_delete = "DELETE FROM contact_us WHERE id = '$delete_id'";
    if (mysqli_query($conn, $sql_delete)) {
        echo "<script>alert('Contact deleted successfully!'); window.location.href='message.php';</script>";
    } else {
        echo "Error deleting contact: " . mysqli_error($conn);
    }
}

// Edit Contact
if (isset($_POST['update_contact'])) {
    $contact_id = $_POST['contact_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // SQL query to update the contact
    $sql_update = "UPDATE contact_us SET name = '$name', email = '$email', message = '$message' WHERE id = '$contact_id'";
    if (mysqli_query($conn, $sql_update)) {
        echo "<script>alert('Contact updated successfully!'); window.location.href='message.php';</script>";
    } else {
        echo "Error updating contact: " . mysqli_error($conn);
    }
}
?>

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
<body>


    <div class="header">

        <div class="nav-bar">
            <div class="nav-div">
            <a href="message.php" style="text-decoration: none; color: white;" class="logo"><img src="image/logo.png" alt="logo" class="logo-img"></a>
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
   <!-- Main section for displaying contacts -->
   <div class="main">
        <div class="container">
            <h2>Contact Us</h2>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>

                <?php
                // Fetch contacts from the database
                $sql = "SELECT id, name, email, message FROM contact_us";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td>
                                <button class='btn btn-primary' onclick='editContact(" . $row['id'] . ", \"" . $row['name'] . "\", \"" . $row['email'] . "\", \"" . $row['message'] . "\")'>
                                    <i class='fa fa-edit'></i> Edit
                                </button>
                                <a href='?delete_id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this contact?\")'>
                                    <i class='fa fa-trash'></i> Delete
                                </a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No contacts found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="contact_id" id="contact_id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="update_contact">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Function to populate the edit modal with contact details
        function editContact(id, name, email, message) {
            document.getElementById('contact_id').value = id;
            document.getElementById('name').value = name;
            document.getElementById('email').value = email;
            document.getElementById('message').value = message;
            var modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="question.js"></script>

</body>
</html>
<?php
session_start();

// Database Connection
$connect = mysqli_connect("localhost", "root", "", "team_web");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle Add User


// Handle Update User
if (isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $first_ = $_POST['username'];
    $role = $_POST['role'];
    $sql = "UPDATE member_details SET username='$username', role='$role' WHERE id=$id";
    $connect->query($sql);
}

// Handle Delete User
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM member_details WHERE id=$id";
    $connect->query($sql);
    header("Location: dashboard.php"); // Redirect to avoid resubmission
}

// Fetch All Users
$result = $connect->query("SELECT * FROM member_details");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="index.php"><h2>Admin Panel</h2></a>
            <ul>
                <li onclick="showContent('profiles')">👥 View Profiles</li>
                <li onclick="showContent('add')">➕ Add User</li>
                
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="main-content" id="main-content">
            <!-- Profiles Section -->
            <div id="profiles" class="section">
                <h1>All User Profiles</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td>
                                   <!-- <button class="btn update" onclick="openUpdateModal(<?php echo $row['id']; ?>, '<?php echo $row['first_name']; ?>', '<?php echo $row['role']; ?>')">✏️ Update</button> -->
                                    <a href="dashboard.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">
                                        <button class="btn delete">❌ Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- Add User Section -->
            <div id="add" class="section" style="display: none;">
                <h1>Add New User</h1>
                <!-- Add enctype attribute to handle file uploads -->
                    <form action="admin/add_user.php" method="POST" enctype="multipart/form-data">
                        <label for="firstname">Firstname:</label>
                        <input type="text" id="firstname" name="firstname" required><br><br>

                        <label for="lastname">Lastname:</label>
                        <input type="text" id="lastname" name="lastname" required><br><br>

                        <label for="about">About:</label>
                        <input type="text" id="about" name="about" required><br><br>

                        <label for="role">Role:</label>
                        <input type="text" id="role" name="role" ><br><br>

                        <label for="instalink">Instagram Link:</label>
                        <input type="text" id="instalink" name="instalink"><br><br>

                        <label for="twitter">Twitter Link:</label>
                        <input type="text" id="twitter" name="twitter"><br><br>

                        <label for="github">Github:</label>
                        <input type="text" id="github" name="github"><br><br>

                        <label for="linkdin">LinkedIn:</label>
                        <input type="text" id="linkdin" name="linkdin"><br><br>


                        <label for="photo">Photo:</label>
                        <input type="file" name="photo" required><br><br>

                        <button type="submit" name="add_user" class="btn">Add User</button>
                    </form>

            </div>

            <!-- Update User Modal -->
            <div id="updateModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h1>Update User</h1>
                    <form action="dashboard.php" method="POST">
                        <input type="hidden" id="update_id" name="id">
                        <label for="update_username">Username:</label>
                        <input type="text" id="update_username" name="username" required><br><br>
                        <label for="role">Role:</label>
                        <input type="text" id="role" name="role" required><br><br>
                        <button type="submit" name="update_user" class="btn">Update User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Content Switching and Modal -->
    <script>
        function showContent(section) {
            document.querySelectorAll('.section').forEach(sec => sec.style.display = 'none');
            document.getElementById(section).style.display = 'block';
        }

        function openUpdateModal(id, username, email) {
            document.getElementById('update_id').value = id;
            document.getElementById('update_username').value = username;
            document.getElementById('update_email').value = email;
            document.getElementById('updateModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('updateModal').style.display = 'none';
        }

        // Show Profiles by default
        showContent('profiles');

        // Close the modal when clicking outside of it
        window.onclick = function(event) {
            const modal = document.getElementById('updateModal');
            if (event.target === modal) {
                closeModal();
            }
        };
    </script>
</body>
</html>

<?php
$connect->close();
?>

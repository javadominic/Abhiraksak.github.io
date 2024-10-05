<?php
if (isset($_POST['add_user'])) {
    // Database Connection
    $conn = new mysqli("localhost", "root", "", "team_web");

    // Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get Data from the Form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $about = $_POST['about'];
    $role= $_POST['role'];
    $instalink = $_POST['instalink'];
    $twitter = $_POST['twitter'];
    $github = $_POST['github'];
    $linkdin = $_POST['linkdin'];
    

    // Handle File Upload
    $image = '';
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        $image = $_FILES['photo']['name'];
        $target_directory = "../uploads/";

        // Check if the upload directory exists, if not, create it
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0755, true);
        }

        $target_file = $target_directory . basename($image);

        // Move uploaded file to destination directory
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
            echo "File uploaded successfully.";
        } else {
            echo "<script>alert('File upload failed.');</script>";
            exit;
        }
    } else {
        echo "<script>alert('Please select a valid file.');</script>";
        exit;
    }

    // Prepare SQL query
    $query = "INSERT INTO member_details (first_name, last_name, about, role,insta_link, twitter_link, github_link, linkdine_link, photo) 
              VALUES ('$firstname', '$lastname', '$about','$role', '$instalink', '$twitter', '$github', '$linkdin', '$image')";

    // Execute the query
    if ($conn->query($query) === TRUE) {
        echo "
        <script>
        alert('User added successfully!');
        window.location = '../index.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Failed to add user: " . $conn->error . "');
        window.location = '../index.php';
        </script>";
    }

    // Close the database connection
    $conn->close();
}
?>

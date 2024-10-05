<?php
// Database connection
$connect = mysqli_connect("localhost", "root", "", "team_web");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM member_details WHERE id = $id";
$result = $connect->query($sql);
$user = $result->fetch_assoc();
if (!$user) {
    echo "<h2>User not found</h2>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $user['first_name'] . "'s Portfolio"; ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap and Icon Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Global Font Styles */
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #121212; /* Dark black background */
            color: #e6e6e6; /* Light text color */
        }

        /* Stylish Headings */
        h1, h2, h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            color: #e74c3c; /* Bold red for headings */
            letter-spacing: 1.5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Main Heading */
        h1 {
            font-size: 48px;
            color: #e74c3c;
            background: linear-gradient(135deg, #c0392b, #e74c3c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Paragraph Styles */
        p, li {
            color: #C0C0C0;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Social Icon Styles */
        .social-icons i {
            font-size: 28px;
            margin: 0 12px;
            color: #e6e6e6;
            transition: color 0.3s ease;
        }

        .social-icons i:hover {
            color: #e74c3c; /* Red hover effect */
            text-shadow: 2px 2px 8px rgba(231, 76, 60, 0.7);
        }

        /* Profile Image Style */
        .profile-img {
            border: 5px solid #e74c3c; /* Red border around profile image */
            box-shadow: 0px 0px 15px 3px rgba(231, 76, 60, 0.5);
            margin-top: 10px;
        }

        /* Custom Style for the 'About Me' Section */
        .about-me {
            padding: 40px;
            border: 2px solid #e74c3c; /* Red border */
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
            border-radius: 8px;
            
            align-items: center;
            margin-top: 40px; /* Adjust to align with image */
            margin-left: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            h1 {
                font-size: 36px;
            }

            p, li {
                font-size: 16px;
            }

            .about-me {
                margin-left: 0;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="fw-bold">Hello!</h1>
        <p class="lead">I'm <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Profile Image Section -->
            <div class="col-md-4 text-center">
                <img src="uploads/<?php echo $user['photo']; ?>" class="img-fluid rounded profile-img" alt="Profile Image">
                <!-- Details Section below the Image -->
                <div class="mt-4">
                    
                    <ul class="list-unstyled">
                        <li><strong>Name:</strong> <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></li>
                        <li><strong>Role:</strong> <?php echo $user['role']; ?></li>
                    </ul>
                    <div class="text-center mt-4">
            <div class="social-icons mt-3">
                <?php if (!empty($user['github_link'])): ?>
                    <a href="<?php echo $user['github_link']; ?>" target="_blank" title="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                <?php endif; ?>
                <?php if (!empty($user['twitter_link'])): ?>
                    <a href="<?php echo $user['twitter_link']; ?>" target="_blank" title="Portfolio">
                        <i class="bi bi-briefcase"></i>
                    </a>
                <?php endif; ?>
                <?php if (!empty($user['linkdine_link'])): ?>
                    <a href="<?php echo $user['linkdine_link']; ?>" target="_blank" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                <?php endif; ?>
                <?php if (!empty($user['insta_link'])): ?>
                    <a href="<?php echo $user['insta_link']; ?>" target="_blank" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
                </div>
            </div>

            <!-- About Me Section beside the Image -->
            <div class="col-md-8 d-flex align-items-start" >
                <div class="about-me" style="background-image: url(img/bg.jpg);">
                    <h3>About Me</h3>
                    <p><?php echo $user['about']; ?></p>
                </div>
               
            </div>
        </div>

        
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$connect->close();
?>

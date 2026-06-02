<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if (is_numeric($username)) {
        $error_message = "Username cannot be a number. Please enter letters.";
    } else {

    
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);

  
        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {

                $_SESSION['username'] = $username;

            
                if ($row['role'] === "admin") {
                    header("Location: admin.php");
                    exit();
                }

                header("Location: home.php");
                exit();

            } else {
                $error_message = "Invalid password.";
            }

        } else {
            $error_message = "No user found with that username.";
        }

    }
}

$conn->close();
?>
<!--page: login-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Log in or create account</h1>
    <h4>Learn on your own time from top universities and businesses.</h4>
<div class="con">
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" id="a" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" id="b" name="password" required>
        <br>
        <input type="submit" id="c" value="Login">
    </form>
   </div>
    <?php if (isset($error_message)): ?>
        <p style="color:red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

   <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #acc3daff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    h1 {
        text-align: center;
        color: #1e3a8a;
        font-size: 28px;
        line-height: 1.3;
        margin-bottom: 10px;
    }

    h4 {
        text-align: center;
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
    }

    form {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 50px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        width: 650px;
    }

    #a,#b {
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #bbb;
        border-radius: 6px;
        width: 100%;
        font-size: 15px;
    }

    #c {
        padding: 12px;
        background-color: #1e90ff;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
    }

    @media (max-width: 768px) {
        form {
            width: 90%;
            padding: 30px;
        }

        h1 {
            font-size: 24px;
        }
    }

    @media (max-width: 480px) {
        h1 {
            font-size: 20px;
        }

        h4 {
            font-size: 14px;
        }

        form {
            padding: 20px;
        }
    }
    .con{
        display:grid;
        place-items:center;
    }
</style>
</body>
</html>
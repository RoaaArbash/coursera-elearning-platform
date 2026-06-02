<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user_db";
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $password = "";
$usernameErr = $passwordErr = "";
$isValid = true;
// Handle signup
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
        $isValid = false;
    } elseif (!preg_match("/^[A-Za-z]+$/", $_POST["username"])) {
        $usernameErr = "Username must contain ONLY letters";
        $isValid = false;
    } else {
        $username = trim($_POST["username"]);
        $check_sql = "SELECT * FROM users WHERE username=?";
        $stmt = $conn->prepare($check_sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $usernameErr = "Username already exists";
            $isValid = false;
        }
    }

    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $isValid = false;
    } elseif (strlen($_POST["password"]) < 6) {
        $passwordErr = "Password must be at least 6 characters long";
        $isValid = false;
    } else {
        $password = trim($_POST["password"]);
    }

    
    if ($isValid) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_sql = "INSERT INTO users (username, password, role) VALUES (?, ?, 'user')";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("ss", $username, $hashed_password);
        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            echo "<p style='color:red;'>Error creating account.</p>";
        }
    }
}

$conn->close();
?>
<!--page: signup-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text"id="a" name="username" value="<?php echo htmlspecialchars($username); ?>">
        <span style="color:red;"><?php echo $usernameErr; ?></span>
        <br><br>

        <label>Password:</label>
        <input type="password"id="b" name="password">
        <span style="color:red;"><?php echo $passwordErr; ?></span>
        <br><br>

        <input type="submit"id="c" value="Create Account">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
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

    form {
        display:grid;
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

        form {
            padding: 20px;
        }
    }
</style>
</body>
</html>
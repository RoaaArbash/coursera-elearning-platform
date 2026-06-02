<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
?>
<!--page: products-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courses Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:  #acc3daff;
            padding: 10px;
            color:  #1e3a8a;
        }

        h1 {
            text-align: center;
            margin-top:-20px;
            margin-bottom: -100px;
            color:  #000000ff;
            font-size:80px;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 100px;
        }

        .course-item {
            border: 1px solid #acc3daff;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            position: relative;
            min-height: 520px;
        }

        .course-item img {
            width: 100%;
            height: 250px;
            object-fit: contain; 
            background-color: #f5f5f5;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        
        .course-item p {
            margin: 6px 0;
            font-size:28px;
            font-weight: bold;
        }

       
        .course-item .desc {
            font-size: 20px;
            color: #000000ff;
            margin-bottom: 50px; 
            font-weight: normal;
        }

        
        .course-item .price {
            position: absolute;
            bottom: 15px;
            right: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #1e3a8a;
        }

        header{
            width: 100%;
            margin-left:-40px;
            margin-top:-20px;
            margin-bottom: 80px;
            padding: 30px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
        }

        #logo{
            color: #1e3a8a;
            font-size: 20px;
            margin-left: 50px;
        }

        nav a{
            margin: 0 15px;
            text-decoration: none;
            color: #000000ff;
            font-size: 18px;
            text-transform: capitalize;
        }

        nav a:hover{
            color: #1e3a8a;
        }

        footer{
            text-align: right;
            color:#333;
        }
        /*  Media Queries  */
@media (max-width: 1024px) {
    .courses-grid {
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 50px;
    }

    .course-item img {
        height: 200px;
    }
}

@media (max-width: 768px) {
    .courses-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .course-item img {
        height: 180px;
    }

    .course-item p {
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    header nav a {
        display: block;
        margin: 5px 0;
        text-align: center;
    }

    .course-item img {
        height: 150px;
    }

    .course-item p {
        font-size: 16px;
    }
}
    </style>
</head>
<body>
<header>
    <h1 id="logo"> <img src="logo.png" width="225" height="40"></h1>

    <nav>
        <a href="home.php">Home</a>
        <a href="extra.php">FAQ</a>
        <a href="login.php">login</a>
        <a href="signup.php">signup</a>
    </nav>
</header>

<h1>Courses:</h1>

<div class="courses-grid">
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $img = "images/" . $row['image'];
        $desc = $row['description'];

        echo "
        <div class='course-item'>
            <img src='{$img}' alt='{$row['name']}'>
            <p>{$row['name']}</p>
            <p class='desc'>{$desc}</p>
            <p class='price'>{$row['price']}$</p>
        </div>
        ";
    }
} else {
    echo "<p>No courses found</p>";
}
?>
</div>

<footer>
    ©️ 2025 Coursera Inc. All rights reserved.
</footer>

</body>
</html>

<?php
$conn->close();
?>
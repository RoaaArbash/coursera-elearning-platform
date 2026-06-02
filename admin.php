<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$uploadsDir = "uploads/";
$images = array_diff(scandir($uploadsDir), array('.', '..')); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image_name = $_POST['image'];
    $conn->query("INSERT INTO courses (name, price, description, image) VALUES ('$name','$price','$description','$image_name')");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM courses WHERE id=$id");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM courses WHERE id=$id");
    $course = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image_name = $_POST['image'];
    $conn->query("UPDATE courses SET name='$name', price='$price', description='$description', image='$image_name' WHERE id=$id");
    header("Location: admin.php");
    exit;
}

$result = $conn->query("SELECT * FROM courses");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background: #f5f5f5;
    }
    h1 { text-align: left;
    color: black; }
    
    h2 { text-align: left;
    color: #1e3a8a;; }
    
    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 400px;
        margin: 10px ;
        padding: 10px;
        background: #acc3daff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }


   
    .form {
        width: 450px;
        margin-top: 10px;
        padding: 8px;
        border: none;
        border-radius: 4px;
        background: #acc3daff;
        color: black;
        
    }
  

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    th { background: #1e3a8a; color: white; }

    td img { max-width: 80px; border-radius: 5px; }

    .table-wrapper {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    @media (max-width: 768px) {
        table, thead, tbody, th, td, tr { display: block; }
        th { position: absolute; top: -9999px; left: -9999px; }
        tr { margin-bottom: 15px; }
        td {
            border: none;
            position: relative;
            padding-left: 50%;
            text-align: left;
        }
        td:before {
            position: absolute;
            left: 10px;
            top: 10px;
            width: 45%;
            white-space: nowrap;
            font-weight: bold;
        }
    }
      #link{
            color: #1e3a8a;
            font-size: 20px;
            margin-left: 1450px;
        }

</style>
</head>
<body>
        <a href="login.php" id="link">login</a>
<h1>Admin Page</h1>

<h2>Add Course</h2>
<form class="form" method="post" action="">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Price:</label>
    <input type="text" name="price" required>

    <label>Description:</label>
    <textarea name="description" required></textarea>

    <label>Choose Image:</label>
    <select name="image" required>
        <option value="">-- Select an image --</option>
        <?php foreach($images as $img): ?>
            <option value="<?php echo $img; ?>"><?php echo $img; ?></option>
        <?php endforeach; ?>
    </select>

    <input type="submit" name="add" value="Add Course">
</form>

<div class="table-wrapper">
    <h2>Existing Courses</h2>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Price</th><th>Description</th><th>Image</th><th>Actions</th>
        </tr>
        <?php if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['description']}</td>
                    <td><img src='uploads/{$row['image']}'></td>
                    <td>
                        <a href='admin.php?edit={$row['id']}'>Edit</a>
                        <a href='admin.php?delete={$row['id']}'>Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No courses found</td></tr>";
        } ?>
    </table>
</div>

<?php if (isset($course)): ?>
<h2>Edit Course</h2>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $course['id']; ?>">

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $course['name']; ?>" required>

    <label>Price:</label>
    <input type="text" name="price" value="<?php echo $course['price']; ?>" required>

    <label>Description:</label>
    <textarea name="description" required><?php echo $course['description']; ?></textarea>

    <label>Choose Image:</label>
    <select name="image" required>
        <option value="">-- Select an image --</option>
        <?php foreach($images as $img): ?>
            <option value="<?php echo $img; ?>" <?php if($course['image']==$img) echo 'selected'; ?>><?php echo $img; ?></option>
        <?php endforeach; ?>
    </select>

    <input type="submit" name="update" value="Update Course">
</form>
<?php endif; ?>

</body>
</html>
<?php $conn->close(); ?>
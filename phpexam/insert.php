<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
    <link rel="stylesheet" type="text/css" href="insert.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Book</h2>

    <form method="post" action="insert.php">
        <label>Book ID:</label><br>
        <input type="text" name="bookid"><br>

        <label>Author ID:</label><br>
        <input type="text" name="authorid"><br>

        <label>Title:</label><br>
        <input type="text" name="title"><br>

        <label>ISBN:</label><br>
        <input type="text" name="ibsn"><br>

        <label>Publication Year:</label><br>
        <input type="text" name="pub_year"><br>

        <label>Availability:</label><br>
        <input type="text" name="available"><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<?php
include('control.php');
$get_data = new data();

if(isset($_POST['submit'])) {
    $errors = array();
    if(empty($_POST['bookid'])) {
        $errors[] = 'Please input book id';
    }
    if(empty($_POST['authorid'])) {
        $errors[] = 'Please input author id';
    }
    if(empty($_POST['title'])) {
        $errors[] = 'Please input title of the book';
    }
    if(empty($_POST['ibsn'])) {
        $errors[] = 'Please input ibsn';
    }
    if(empty($_POST['pub_year'])) {
        $errors[] = 'Please input public year';
    }
    if(empty($_POST['available'])) {
        $errors[] = 'Please input available';
    }

    if(empty($errors)) {
        $bookid = $_POST['bookid'];
        $authorid = $_POST['authorid'];
        $title = $_POST['title'];
        $ibsn = $_POST['ibsn'];
        $pub_year = $_POST['pub_year'];
        $available = $_POST['available'];
        $insert = $get_data->insert($bookid, $authorid, $title, $ibsn, $pub_year, $available);
        if($insert) {
            echo "<script>alert('Add book to library successfully'); window.location = 'display.php';</script>";
        } else {
            echo "<script>alert('Failed to add')</script>";
        }
    } else {
        foreach($errors as $error) {
            echo "<script>alert('$error')</script>";
        }
    }
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Books in Library</h2>

<table>
    <tr>
        <th>Book ID</th>
        <th>Author ID</th>
        <th>Title</th>
        <th>ISBN</th>
        <th>Publication Year</th>
        <th>Availability</th>
    </tr>

    <?php
    require("control.php");
    $get_data = new data();
    $books = $get_data->select();
    if(mysqli_num_rows($books) > 0) {
        while($row = mysqli_fetch_assoc($books)) {
            echo "<tr>";
            echo "<td>" . $row["bookid"] . "</td>";
            echo "<td>" . $row["authorid"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["ibsn"] . "</td>";
            echo "<td>" . $row["pub_year"] . "</td>";
            echo "<td>" . $row["available"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No books found in the library</td></tr>";
    }
    ?>
</table>

</body>
</html>

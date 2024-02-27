<?php
require("connect.php");

class data
{
    function select()
    {
        global $conn;
        $sql = "SELECT * FROM library";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function insert($bookid, $authorid, $title, $ibsn, $pub_year, $available)
        {
            global $conn;
            $sql = "INSERT INTO library(bookid,authorid,title,ibsn,pub_year,available)
            VALUES('$bookid', '$authorid' , '$title' , '$ibsn' , '$pub_year' , '$available')";
            $run = mysqli_query($conn,$sql);
            return $run;
        }
}
?>

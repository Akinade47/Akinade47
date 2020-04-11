<?php
$conn = mysqli_connect("localhost", "root", "Olaoluwa47") or die ("error");
$db = "CREATE DATABASE IF NOT EXISTS startng";
$query_db = mysqli_query($conn, $db) or die ("error");
mysqli_select_db($conn, 'startng') or die ("error");

$tab1 = "CREATE TABLE IF NOT EXISTS admin (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
first_name VARCHAR (255),
last_name VARCHAR (255),
email VARCHAR (255),
password VARCHAR (255),
gender VARCHAR (255),
designation VARCHAR(255),
department VARCHAR(255)
)";
$tab1_query = mysqli_query($conn, $tab1) or die ("error");


if($tab1_query !== FALSE)
{
   echo "done";
}
else
{
    echo "failed";
}






?>
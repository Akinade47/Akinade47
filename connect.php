<?php

include('db.php');


 if(isset($_POST['submit'])) {
     
     $var = $_POST['first_name'];
     $var2 = $_POST['last_name'];
     $var3 = $_POST['email'];
     $var4 = $_POST['password'];
     $var5 = $_POST['gender'];
     $var6 = $_POST['designation'];
     $var7 = $_POST['department'];
     
     
     $inject = mysqli_real_escape_string($conn, $var);
     $inject2 = mysqli_real_escape_string($conn, $var2);
     $inject3 = mysqli_real_escape_string($conn, $var3);
     $inject4 = mysqli_real_escape_string($conn, $var4);
     $inject5 = mysqli_real_escape_string($conn, $var5);
     $inject6 = mysqli_real_escape_string($conn, $var6);
     $inject7 = mysqli_real_escape_string($conn, $var7);
     
     $insert = "INSERT INTO admin(first_name, last_name, email, gender, designation, department)VALUES('$inject', '$inject2', '$inject3', '$inject4', '$inject5', '$inject6', '$inject7')";
     
     $insert_query = mysqli_query($conn, $insert) or die ('error');
     
     
}else{
     echo "error";
 }





?>
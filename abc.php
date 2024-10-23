<?php
$A=$_POST['User_Name'];
$B=$_POST['User_Pass'];
$servername = "localhost";
$username = "root";//username of your device
$password = "krish@123";//password on mysql
$dbname = "student_pbl";//database name
$conn="";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: ".$conn->connect_error);
// }
// echo "Connected successfully"."<br>";


// $sql="CREATE DATABASE test2";
// $sql="CREATE TABLE USERS (U_ID int,U_name varchar(10))";

$sql="use student_pbl";
$sql="select * from stud where username=$a and password=$b";


// $sql="INSERT INTO USERS values('$A','$B')";
if($conn->query($sql)==TRUE){
    // echo "Database created succesfully";
    // echo "Table created succesfully";
    // echo "Values inserted succesfully";

}
// else{
//     echo "\nSome error in database creation".$conn->error;
// }

$conn->close();
?>
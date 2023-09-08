<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "system";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['green']))
{
    $Fname=$_POST['Firstname'];
    $Lname=$_POST['Lastname'];
    $email=$_POST['Email'];
    $gen=$_POST['gender'];
    $file=addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
    $born=$_POST['dob'];
    $User=$_POST['phone'];
    $add=$_POST['address'];
    $aim=$_POST['service'];
    $sql_query="INSERT INTO prof (Firstname,Lastname,Email,gender,file,dob,phone,address,service) VALUES('$Fname','$Lname','$email','$gen','$file','$born','$User','$add','$aim')";
}
    if(mysqli_query($conn, $sql_query))
    {
        echo '<script> alert("Form submitted successfully.")</script>';
    }
?>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "system";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['blue']))
{ 
    $Fname=$_POST['Firstname'];
    $Lname=$_POST['Lastname'];
    $email=$_POST['Email'];
    $Username=$_POST['username'];
    $Pass=$_POST['password'];
    $confirm=$_POST['Confirmpass'];
    $sql_query="INSERT INTO signup (Firstname,Lastname,Email,username,password) VALUES('$Fname','$Lname','$email','$Username','$Pass')";
}
if(($_POST["password"])!=($_POST["Confirmpass"])){
    die("Password mismatch");
}
    if(mysqli_query($conn, $sql_query))
    {
        header("Location: login.html");
    }
    else{
        header("location:sign.html");
    }
?>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "system";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['pup']))
{
    $Fname=$_POST['Firstname'];
    $Lname=$_POST['Lastname'];
    $User=$_POST['phone'];
    $email=$_POST['Email'];
    $sub=$_POST['subject'];
    $meso=$_POST['info'];
    $sql_query="INSERT INTO contact (Firstname,Lastname,phone,Email,subject,info) VALUES('$Fname','$Lname','$User','$email','$sub','$meso')";
}
    if(mysqli_query($conn, $sql_query))
    {
        echo 'Form submitted successfully.';
    }
    
?>
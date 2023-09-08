<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "system";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['hello']))
{ 
    $Fname=$_POST['Firstname'];
    $Mname=$_POST['Middlename'];
    $Lname=$_POST['Lastname'];
    $email=$_POST['Email'];
    $User=$_POST['idno'];
    $Pass=$_POST['dob'];
    $confirm=$_POST['area'];
    $number=$_POST['phone'];
    $home=$_POST['address'];
    $sql_query="INSERT INTO helloo (Firstname,Middlename,Lastname,Email,idno,dob,area,phone,address) VALUES('$Fname','$Mname','$Lname','$email','$User','$Pass','$confirm','$number','$home')";
}
    if(mysqli_query($conn, $sql_query))
    {
       echo '<script>alert("Profile successfully submitted")</script>';
       header("location:index.php");
    }
    else{
        header("location:myprof.html");
    }
?>
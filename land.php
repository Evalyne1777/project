<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="tail.css">
    <title>Bidco farm</title>
</head>
<body><br><br><br><br><br><br><br><br><br>
<div class="signupfrm"><br><br>
    <form action="" method="POST" class="form" >
        <h3 class="title2">PLEASE ENTER YOUR FARM PRODUCE DETAILS</h3>
        <div class="inputcontainer">
            <input type="text"class="input"placeholder="a" name="location" required>
            <label for=""class="label">LOCATION:</label>
        </div>
        <div class="inputcontainer">
            <input type="text"class="input"placeholder="a" name="quantity" required>
            <label for=""class="label">QUANTITY:</label>
        </div>
        <div class="inputcontainer">
            <input type="tel"class="input"placeholder="a" name="price" required>
            <label for=""class="label">PRICE:</label>
        </div>
       <div class="inputcontainer">
        <textarea class="input" placeholder="a" name="description" required cols="40"rows="5"></textarea>
        <label for=""class="label" name="description">DESCRIPTION:</label>
       </div>
       <input type="submit"class="submitbtn"name="pup"value="SUBMIT">
</body>
</html>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "system";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection failed:".mysqli_connect_error());
}
if(isset($_POST['pup']))
{ 
    $Fname=$_POST['location'];
    $Lname=$_POST['quantity'];
    $email=$_POST['price'];
    $Username=$_POST['description'];
    // $sql_result=mysqli_query($conn,$sql_query);
    $sql_query="INSERT INTO land (location,quantity,price,description)VALUES('$Fname','$Lname','$email','$Username')";
}
    if(mysqli_query($conn,$sql_query))
    {       
        echo '<script>alert("Details submitted successfully")</script>';
    }

    // if(mysqli_query($conn, $sql_query))
    // {
    //     header("Location: login.html");
    // }
    // else{
    //     header("location:sign.html");
    // }
?>
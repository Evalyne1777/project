<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "system";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['red'])) {
    $sql = mysqli_query($conn, "SELECT * FROM signup WHERE username='" . $_POST["username"] . "' AND
    password='" . $_POST["password"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:index.php");
        exit();
    }
    else {
        header("location:login.html?error=Incorrect User name or password");
    }
}
?>
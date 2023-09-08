<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "system";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['adm'])) {
    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username='" . $_POST["username"] . "' AND
    password='" . $_POST["password"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:adm.php");
        exit();
    }
    else {
        header("location:reset.html?error=Incorrect User name or password");
    }
}
?>
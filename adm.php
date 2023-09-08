<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="style.css">
    <title>Bidco farm</title>
</head>
<body>
     <form action="adm.php" method="POST">
     <h2> BIDCO FARM PRODUCE.WE PRODUCE THE BEST ORGANIC AGRICULTURAL FARM PRODUCTS.</h2>
     <p>Welcome admin find users using their ID.</p>
        <input type="text" name="id" placeholder="Enter ID"><br>
        <input type="submit"name="search" value="SEARCH">
     </form><br><br>
</body>
</html>
    <?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "system";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['search'])){
     $id=$_POST['id'];
     $sql_query="SELECT * FROM helloo where id='$id'";
     $sql_result=mysqli_query($conn,$sql_query);
    while($row=mysqli_fetch_array($sql_result)){

   

?>
         
        <form action="users.html" method="POST">
        <label for=""class="label">ID:</label>
        <input type="text" name="id" value="<?php echo $row['id']; ?>"><br>
        <label for=""class="label">First name:</label>
        <input type="text" name="Firstname" value="<?php echo $row['Firstname']; ?>"><br>
        <label for=""class="label">Middle name:</label>
        <input type="text" name="Middlename" value="<?php echo $row['Middlename']; ?>"><br>
        <label for=""class="label">Last name:</label>
        <input type="text" name="Lastname" value="<?php echo $row['Lastname']; ?>"><br>
        <label for=""class="label">Email: </label>
        <input type="text" name="Email" value="<?php echo $row['Email']; ?>"><br>
        <label for=""class="label">ID Number:</label>
        <input type="text" name="idno" value="<?php echo $row['idno']; ?>"><br>
        <label for=""class="label">DATE OF BIRTH:</label>
        <input type="text" name="dob" value="<?php echo $row['dob']; ?>"><br>
        <label for=""class="label">LOCATION: </label>
        <input type="text" name="area" value="<?php echo $row['area']; ?>"><br>
        <label for=""class="label">PHONE NUMBER:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
        <label for=""class="label">ADDRESS:</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
        <label for=""class="label">TIME: </label>
        <input type="text" name="time" value="<?php echo $row['time']; ?>"><br>
    </form>
<?php
}
}
?>

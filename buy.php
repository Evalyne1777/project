<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="tail.css">
    <title>Bidco farm</title>
</head>
<body>
     <form action="" method="POST">
        <input type="text" name="price" placeholder="Enter price"><br>
        <input type="submit"name="buy" value="SEARCH">
     </form><br><br>

     <h2><strong>Available produce will display below...</strong></h2>
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
if(isset($_POST['buy'])){
     $id=$_POST['price'];
     $sql_query="SELECT * FROM land where price<='$id'ORDER BY price asc";
     $sql_result=mysqli_query($conn,$sql_query);
    while($row=mysqli_fetch_array($sql_result)){

   

?>
         
        <form action="" method="POST">
        <label for=""class="label">LOCATION:</label>
        <input type="text" name="location" value="<?php echo $row['location']; ?>"><br>
        <label for=""class="label">QUANTITY:</label>
        <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
        <label for=""class="label">PRICE:</label>
        <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
        <label for=""class="label">DESCRIPTION:</label>
        <input type="text" name="description" value="<?php echo $row['description']; ?>"><br>
        <input type="submit"class="submitbtn"value="BUY" name="nunua"><br><br>
    </form>
<?php
}
}
?>

     <!-- <style>
        body{
    background-color: gray;
}
input{
    width: 20%;
    height: 5%;
    border: 1px;
    border-radius: 5px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px; 
    box-shadow: 1px 2px 1px 1px;
    margin-left:450px;
    background-color: transparent;
}
label{
    margin-left: 400px;
}
     </style> -->
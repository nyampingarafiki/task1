<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h1>Select</h1>
    <table border="1">
        <th>Id</th>
        <th>UserName</th>
        <th>Password</th>
<?php
$conn=mysqli_connect("localhost","root","","stock");

$sql="SELECT * FROM furniture";
$a=mysqli_query($conn,$sql);
while($tax=$a->fetch_assoc()){
    ?>
    <tr>
      <td><?php echo $tax['FurnitureId'];?></td>
      <td><?php echo $tax['FurnitureName'];?></td>
      <td><?php echo $tax['FurnitureOwnerName'];?></td>
      <td><a href="update.php">EDITE</a>|||<a href="delete.php">DELETE</a></td>
    </tr>
    <?php } ?>
    </table>
</center>
</body>
</html>
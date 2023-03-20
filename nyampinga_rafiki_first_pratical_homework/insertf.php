<?php
include'connect.php';


    $a=$_POST['FurnitureId'];
    $b=$_POST['FurnitureName'];
    $c=$_POST['FurnitureOwnerName'];

    $sql="INSERT INTO furniture VALUES ('$a','$b','$c')";
    $a=mysqli_query($conn,$sql);
    header("location:furniture.php");

?>
	
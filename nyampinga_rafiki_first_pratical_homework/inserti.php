<?php
include'connect.php';


    $a=$_POST['FurnitureId'];
    $b=$_POST['ImportDate'];
    $c=$_POST['Quality'];

    $sql="INSERT INTO import VALUES ('$a','$b','$c')";
    $a=mysqli_query($conn,$sql);
    header("location:import.php");

?>
	
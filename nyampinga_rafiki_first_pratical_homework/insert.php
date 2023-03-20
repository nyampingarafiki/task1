<?php
include'connect.php';


    $a=$_POST['Managerid'];
    $b=$_POST['UserName'];
    $c=$_POST['Password'];

    $sql="INSERT INTO manager VALUES ('$a','$b','$c')";
    $a=mysqli_query($conn,$sql);
    header("location:manager.php");

?>
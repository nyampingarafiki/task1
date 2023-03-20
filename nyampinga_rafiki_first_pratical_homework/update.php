<?php
include'connect.php';


    $a=$_POST['Id'];
    $b=$_POST['UserName'];
    $c=$_POST['Password'];

    $sql="UPDATE manager SET Id='$a, UserName='$b',password='$c' WHERE id='$a'";
    $a=mysqli_query($conn,$sql);
    header("location:upd_form.php");

?>
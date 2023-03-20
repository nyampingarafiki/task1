<?php
$conn=mysqli_connect("localhost","root","","stock");
$a=$_POST['id'];
$sql="delete from manager where id='$a'";
$a=mysqli_query($conn,$sql);
header ("location:del_form.php");
?>
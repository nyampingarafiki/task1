<!DOCTYPE html>
<html>
<head>
    <title>Manager</title>
</head>
<style type="text/css">

input{
    width:100%;
    box-sizing:border-box;
    margin: 5px 0px;
    padding: 3px;
    border-radius: 5px;
}
.input{
    width:100%;
    box-sizing:border-box;
    margin: 6px 0px;
    padding: 5px;
    border-radius: 2px;
}
form {
    width: 25%;
    background: lightblue;
    padding: 40px 30px;
    position: relative;
    top: 70%;
    left: 50%;
    transform: translate(-50%,3%);
    border-radius:10px;
}
input[type=submit]{
    background:lavender;
    border-color:lavender;
    font-size:18px;
    color:black;
    font-weight:bold;
    border-radius: 20px;
}
</style>
<body>
<form method="post" action="insert.php">
    <h2>MANAGER</h2>
    <label>Id</label>
    <input type="text" name="ManagerId">
    <label>UserName</label>
    <input type="text" name="UserName">
    <label>Password</label>
    <input type="password" name="Password">
    <input type="submit" value="Submit">
</form>
</body>
</html>

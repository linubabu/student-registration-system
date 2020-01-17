<?php
include("config/connection.php");
include("controllers/student_controller.php"); 
?>
<?php 
  if(isset($_POST['submit'])){
    $uname = $_POST['user_name'];
    $psw =  $_POST['password'];
    $con=new student_controller();
    $con->login($uname,$psw);
  
  }  
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/textstyle.css">
<style>
.var div{
	border:2px solid black;
}
</style>	
<head>
	
<body>
<center>
<div  style="height:300px;margin-top: 100px">
	<div class="var">
<form name="form"  method="post" >
<h2 style="color: white">LOGIN</h2></div>
<table> 
    <tr>
    <td>User Name:</td>
    <td><input type="text" class="frm" name="user_name"></td>
	</tr>
	<tr>
	<td>Password:</td>
    <td><input type="password" class="frm" name="password"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" class="frm-btn" name="submit" value="Submit"></td>
	</tr>
	<tr><td></td><td><input type="radio" name="keep" value="keep">Keep Me Logged In</td></tr>
<tr><td></td><td><a href="change_pwd.php">Forgot Password?..</a></td></tr>
</table>	
</form>
</div>
</div>
</center>
</body>
</html>
<?php include("footer.php");?>
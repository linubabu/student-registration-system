<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>
</title>
<style>
	
	.menubar ul{

		text-align: center;
	}
	.menubar ul li{	 
		display: inline;
		padding: 10px;
	}
	.menubar ul li a{
		color:#a34a44;
	}
</style>
</head>
<body class="img">
<div class="menubar" style="background:white	;">
<ul>
<li>
	<b><a href="/Student_Registration_System/?0">HOME</a></b>
</li>

<li>
	<b><a href="/Student_Registration_System?id=1">REGISTRATION </a></b>
</li>
<li>
	<b><a href="appoinment.php">CONTACT</a></b>
</li>
<li>
	<b><a href="/Student_Registration_System?id=2">LOGIN</a></b>
</li>
</ul>
</div>
</body></html>

<?php 
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		if($id==0){
			$con=new controller();
		}if($id==1){
			$con=new controller();
			$con->reg();
		}if($id==2){
			$con=new controller();
			$con->login();
		}
	}
 ?>
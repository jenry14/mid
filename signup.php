<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"loginn");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
	<link rel = "stylesheet"
			href = "create.css">
	<style type="text/css">
		body, html{
  height: 100%;
  margin: 0; 
}
body {
  background-image:url("secu(1).jpeg");
  height: 100%;
  background-repeat:no-repeat;
    background-position: center;
    
    border: 0px dashed #333;
    background-size: 100% auto;
}
	</style>
</head>
<body>
<div class="main-w3layouts wrapper">
		<h1>Sign Up</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form>
					<input class="text" type="text" name="user" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="pass" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password1" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<button type="submit" value="Sign Up" name = "sign">Sign Up</button>
				</form>
				<p>Have an Account already? <a href="loginn.php"> Login Now!</a></p>
			</div>
		</div>
</body>
</html>

<?php

if(isset($_GET['sign'])){
$n1=$_GET['user'];
$n2=$_GET['pass'];
$create="Create account";


$stmt="INSERT INTO `admin`(`user`,`pass`)VALUES('".$n1."','".$n2."')";
if(mysqli_query($link,$stmt)){
	$query = "INSERT INTO weww(user,activity) values ('".$n1."','$create')";
  $result1 = mysqli_query($link,$query);
	header("Location: loginn.php");
	echo "Account Created";
}
else{
	echo "fail";
}
}
?>
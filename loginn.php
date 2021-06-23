<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"loginn");

?>


<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel = "stylesheet"
			href = "loginn.css">

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
	<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="Ex. jenrypogi"/>
      <input type="password" placeholder="Ex. jenry123"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>

    </form>

    <form class="login-form">
      <input type="text" placeholder="username" name = "user" class="user_text" />
      <input class = "text email" type="password" id="password" name="pass" placeholder = "Password" required = ""/>
      <button type  = "submit" name = "login">login</button>
      <p class="message">Not registered? <a href="signup.php ">Create an account</a></p><br>
      <p><a href="forgot.php">Forgot password</a></p>
    </form>
  </div>
</div>


<!---------Bandang php--------------------->
<?php
 if(isset($_GET['login'])){
$n1=$_GET['user'];

$n2=$_GET['pass'];
$log = "Login";
$tb2="SELECT * FROM `admin` WHERE `user` = '".$n1."' and `pass` = '".$n2."'";
$tb3="SELECT * FROM `admin1` WHERE `user` = '".$n1."' and `pass` = '".$n2."'";
if($result=mysqli_query($link,$tb2)){
  $check = mysqli_num_rows($result);
if($check>0){
  $query = "INSERT INTO weww(user,activity) values ('".$n1."','$log')";
  $result1 = mysqli_query($link,$query);
  echo "<script>alert('Welcome user')</script>";

  header("Location: home.php");

}
}
if($result=mysqli_query($link,$tb3)){
  $check = mysqli_num_rows($result);
if($check>0){
  $query = "INSERT INTO weww(user,activity) values ('".$n1."','$log')";
  $result1 = mysqli_query($link,$query);
  echo "<script>alert('Welcome user')</script>";

  header("Location: home1.php");

}
}
else{
  echo "<script>alert('fail to login please try again!'')</script>";

}
}
?>



</body>
</html>

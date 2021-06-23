<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"loginn");

?>


<!DOCTYPE html>
<html>
<head>
	<title>	Forgot password</title>
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
    

    <form class="login-form">
      <input type="text" placeholder="username" name = "user" class="user_text" />
      <input class = "text email" type="password" id="password" name="pass" placeholder = "Old Password" required = ""/>
      <input class = "text" type="password" id="password1" name="newpassword" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
  
          <input class = "text w3lpass" type="password" id="password1" name="password" placeholder="Confirm Passowrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
      <button type  = "submit" name = "update">Update</button>
      <p class="message">Login Now? <a href="loginn.php ">Login</a></p><br>
      
    </form>
  </div>
</div>
<?php



if(isset($_POST['update'])){


$u =$_POST['user'];
$n3=$_POST['newpassword'];
$id=$_POST['id'];
$forgot = "Forgot/update Password";

$n1=$_GET['user'];

$n2=$_GET['pass'];
$tb2="SELECT * FROM `admin` WHERE `user` = '".$n1."' and `pass` = '".$n3."'";

if($result=mysqli_query($link,$tb2)){
  $check = mysqli_num_rows($result);
if($check>0){
  $result1 = mysqli_query($link,$query);
$stmt="UPDATE * from 'admin' where = '".$n1."' and `pass` = '".$n3."'";
if(mysqli_query($link,$stmt)){
  $query = "INSERT INTO weww(user,activity) values ('$u','$forgot')";
      $result1 = mysqli_query($link,$query);
      header('Location:loginn.php');
      echo "Update Success";
    }
}
  }
else{
  echo "fail";
}
}
?>
</body>
</html>
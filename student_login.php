<?php include('server.php') ?>
<?php
include("server.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($db,$_POST['email']);
 $password=mysqli_real_escape_string($db,$_POST['id']);
 $result = mysqli_query($db,"SELECT * FROM cte");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$username) {
  header("location: student_login.php?remark_login=failed");
 }
 $sql="SELECT id FROM cte WHERE email='$username' and id='$password'";
 $result=mysqli_query($db,$sql);
 $row=mysqli_fetch_array($result);
 $count=mysqli_num_rows($result);
 if($count==1) {
  $_SESSION['login_user']=$username;
  header("location: student_profile.php");
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Student Hub Login
	</title>
	
	<link rel="stylesheet" type="text/css"
			href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login Here!</h2>
	</div>
	
	<form method="post" action="student_profile.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Enter Email</label>
			<input type="email" name="email" >
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="id">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
						name="login_user">
				Login
			</button>
		</div>
		


<p>
			New Here?
			<a href="register.php">
				Click here to register!
			</a>
		</p>



	</form>
</body>

</html>

<?php 
include("../includes/database_connection.php");
include("../includes/functions.php");
?>
<?php
if(logged_in())
	redirect_to("home.php");
?> 
<?php
global $error_in_name,$error_in_email,$error_in_password,$error_in_username;
$salt_string="@!";
if (isset($_POST['submit'])) 
{
	$name = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['name'])));
	$email = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['email'])));
	$password = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['password'])));
	$confirm_password = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['confirm_password'])));
	$username = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['username'])));
	$hash_password = password_hashing($password);
	$validation_of_name=valid_name($name);
	$validation_of_email=valid_email($email,$connection);
	$validation_of_username=valid_username($username,$connection);
	$validation_of_password=valid_password($password,$confirm_password);
	if($validation_of_name==1 && $validation_of_email==1 && $validation_of_password==1 && $validation_of_username==1)
		$check=1;
	else
		$check=0;
	if ($check==1) 
	{
		$name.=$salt_string;
		$username.=$salt_string;
		$email.=$salt_string;
		$query = "INSERT INTO user_details(name,email,username,password) VALUES('$name','$email','$username','$hash_password')";
		$result = mysqli_query($connection,$query);
		if (!$result)
		{
			echo "INSERT failed: $query<br>" .  $connection->error . "<br><br>";
		}
		else
		{
			redirect_to("login.php");
		}
		?>
		<script>
			var login_value = 1; 
		</script>
		<?php
	}
	else
	{

		?>

		<script>
			var login_value = 0; 
		</script>

		<?php
	}

}  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" href="css/signup.css" />
</head>
<body>
	<div class="signup">
		<hr width="80%">
		<h1 align="center">Welcome To <b> TravelFreak</b></h1>
		<hr width="80%">
		<div class="texts">
			<h1 align=center><b>Registration</b></h1>
			<form name="registration" action="" method="post">
				<center>
					<font face="Segoe UI">
						<table>
							<tr><td>Name:</td><td>	<input type="text" name="name" placeholder="Name"></td></tr>
							<tr><td><span style="color: red;"><?php echo "<br>"."$error_in_name"?></span></td></tr>
							<tr><td>Email:	</td><td> 	<input type="email" name="email" placeholder="Email" required /><br></td></tr><tr><td><br></td></tr>
								<tr><td>Username:</td><td>	<input type="text" name="username" placeholder="Username" required /></td></tr>
								<tr><td><span style="color: red;"><?php echo "<br>"."$error_in_username"?></span></td></tr>
								<tr><td>Password:</td><td> 	<input type="password" name="password" placeholder="Password" required /></td></tr>
								<tr><td><span style="color: red;"><?php echo "<br>"."$error_in_password"?></span></td></tr>
								<tr><td>Password:</td><td> 	<input type="password" name="confirm_password" placeholder="Confirm Password" required /></td></tr>
								<tr><td><span style="color: red;"><?php echo "<br>"."$error_in_password"?></span></td></tr>
								<tr><td>Date Of Birth:</td><td>	<input type="date" name="dob"></td></tr><tr><td><br></td></tr>
								<tr><td>Address:	</td><td>
								<textarea name="address" rows=3 cols='25' placeholder="Your Address Here..." style="background-color: rgba(255,204,153,0.3);color: black; "></textarea></td></tr>
							</table>
						</font>
						<input type="submit" name="submit" value="Register" style="background:#383278; " />
					</center>
				</form>
			</div>
		</div>

	</body>
	</html>
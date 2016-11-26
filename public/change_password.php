<?php
include("../includes/database_connection.php");
include("../includes/session.php");
include("../includes/functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel Anywhere !</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/gallery1.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<link rel="stylesheet" type="text/css" href="css/special.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(function () {
			$('input[type="button"]').on('click', function (e) {

				e.preventDefault();

				$.ajax({
					type: 'post',
					url: 'change_password1.php',
					data: $('form').serialize(),
					success: function (result) {
						$('#one').text(result);
					}
				});

			});

		});
	</script>
	<script type="text/javascript">
		var count = 1;
		var total = 10;

		function slide(a){
			var image =document.getElementById('img');
			count += a;
			if(count>total){
				count = 1;
			}
			if(count < 1){
				count = 10;
			}
			image.src = "images/z" + count + ".jpg";

		}

		function cancel(){
			document.getElementById('highbox').style.display="none";
			document.getElementById('cancel').style.display="none";
			document.getElementById('i1').style.display="none";
		}


</script>

<style type="text/css">
	.layoutcp {
		background-image: -webkit-linear-gradient(left, 
			rgba(0, 0, 0, 0.9) 0%, 
			rgba(154, 72, 72, 0) 10%,
			rgba(0,0,0,0) 90%,
			rgb(0, 0, 0) 100%
			),url("images/black.jpg");
		clear: left;
		color: #dec1c1;	
		height: 100%;
		margin-left: 5%;
		margin-right: 5%;
		margin-bottom:10px;
			/*padding-top: 20px;
			padding-bottom: 20px;*/
			/*position: relative;*/
			border-top: 1px solid white;
			border-bottom: 1px solid white;
		}
		.settings_col{
			opacity: 0.85;
			background-image: url(images/upperImg.jpg);
			color: white;
			border-radius: 10%;
		}
		.settings_content{
			opacity: 1;
		}
		
	</style>
</head>
<body>
	<div class="top">
		<div class="top-left">
			<ul class="top-one">
				<li id="first"><a href="" >+918588040053</a></li>
				<li class="end"><a href="" >travel.freak@anywhere.com</a></li>
			</ul>
		</div>
		<div class="top-right">
			<ul class="top-two">
				<li><a href="facebook.com">Facebook</a></li>
				<li><a href="google.com">google</a></li>
				<li><a href="twitter.com">twitter</a></li>
				<li><a href="linkedin.com">linkedin</a></li>
			</ul>
		</div>
	</div>
	<div class="content" style="height: 15%;">
		<div class="content-left">
			<ul class="content-one">
				<li><a href="home.php">TRAVELFREAK</a></li>
			</ul>
		</div>
		<div class="content-right">
			<ul class="content-two">
				<li><a href="home.php">Home</a></li>
				<li style="margin-top: -0.4em;margin-right:-0.4em;">
					<div class="drop2">
						<div class="dropbtn2" >&nbsp;Tickets</div>
						<div class="dropdown-content2">
							<a href="profile_settings.php">Airplane</a>
							<a href="account_settings.php">Train</a>
							<a href="account_settings.php">Bus</a>
						</div>
					</div>
				</li>
				<li><a href="google.com">Hotels</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="blog.php">TravelDiaries</a></li>
				<li style="margin-top: -0.4em;margin-right:-0.4em;">
					<div class="drop">
						<div class="dropbtn" >&nbsp;Settings</div>
						<div class="dropdown-content">
							<a href="logout.php">Logout</a>
							<a href="profile_settings.php">Profile Settings</a>				
							<div style="margin-top: -0.4em;margin-right:-0.4em;">
								<div class="drop1">
									<div class="dropbtn1" >&nbsp;Account Settings</div>
									<div class="dropdown-content1">
										<a href="change_password.php">Change Password</a>
										<a href="delete_account.php">Delete Account</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	
	
	

	<div class="layoutcp">
		<div>
			<h2 style="font-size: 60px;text-align: center; font-family: 'Segoe UI Light', 'Segoe UI', Arial,Helvetica,sans-serif;">Change Password</h2>
		</div>
		<div class="settings_col">
			<div class="settings_content" >
				<form  action="change_password.php" method='POST' enctype="multipart/form-data"> 
					<p> 
						<label for="old_password" class="uname" data-icon="p" > Old Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input id="old_password" name="old_password" required="required" type="password" placeholder="myoldpassword" style="height: 1em;width: 20em;padding: 1em;" />
					</p>
					<p> 
						<label for="new_password" class="uname" data-icon="p" > New Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input id="new_password" name="new_password" required="required" type="password" placeholder="mynewpassword" style="height: 1em;width: 20em;padding: 1em;"/>
					</p>
					<p> 
						<label for="confirm_password" class="uname" data-icon="p" > Confirm Password :</label>&nbsp;&nbsp;
						<input id="confirm_password" name="confirm_password" onkeyup="checkPass();" required="required" type="password" placeholder="mynewpassword" style="height: 1em;width: 20em;padding: 1em;"/>
						<p id="status"></p>

					</p>
					<p class="sign up button"> 
						<input type="button" name="submit" value="Save Changes"></input>
					</p>
				</form>
				<div id="one" style="margin-top: -8%;margin-left: 25%;font-size: 120%;color: red;">

				</div>	

			</div>
		</div>
	</div>
	<?php
	include("footer.php");
	?>

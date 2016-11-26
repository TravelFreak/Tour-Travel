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
</head>
<body>
	<div class="top" >
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
							<a href="bookflight.php">Airplane</a>
							<a href="bookrail.php">Train</a>
							<a href="bookbus.php">Bus</a>
						</div>
					</div>
				</li>
				<li><a href="gallery.php">Gallery</a></li>
				<li style="margin-top: -0.4em;margin-right:-0.4em;">
					<div class="drop2">
						<div class="dropbtn2" >&nbsp;TravelDiaries</div>
						<div class="dropdown-content2">
							<a href="blogpost.php">Post A Blog</a>
							<a href="blog.php">Blog Section</a>
						</div>
					</div>
					<li><a href="profile.php">Profile</a></li>
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
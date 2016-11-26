<?php
include("../includes/database_connection.php");
include("../includes/functions.php");
include("../includes/session.php");
?>

<?php
if(logged_in())
{
	$current_username= $_SESSION['current_username'];
	$current_name=$_SESSION['current_name'];
	$current_user_id=$_SESSION['current_user_id'];
}
else
	redirect_to("login.php");
?>

<?php

$pull="SELECT * FROM user_details WHERE user_id = $current_user_id";


$result=mysqli_query($connection,$pull);
$row=mysqli_fetch_assoc($result);

$name = chop($row['name'],'@!');
$username = chop($row['username'],'@!');
$location = chop($row['location'],'@!');
$bio = chop($row['bio'],'@!');

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
		function cancel(a){
			$.ajax({
				type: 'post',
				url: 'profile1.php',
				data: {'a' : a},
				success: function (result) {
					result = $.trim(result);
				}
			});
			window.location.reload();

		}

	</script>
	<style type="text/css">
		.info table {
			border:2px solid grey; 
			width: 180%;
		}

		.info td {
			border:2px solid grey; 
			width: 50px;
			text-align: center;
			color: #ce835b;
		}

		.tag{
			color: #a198fb;	
		}
		.prof{
			margin-top: 2%;
			font-size: 300%;
			color:white;
			font-weight: bold;
			text-align: center;
		}

		.pict{
			margin-left: 10%; 
			margin-top: 5%;
			margin-bottom:-12%;
			height: 30%;
		}
		.info{
			float: right;
			color:white;
			margin-top: -28%;
			margin-right: 30%;
		}

		.history{
			color:white;
			font-size: 200%;
			text-align: center;
		}
		.layoutp {
			background-image: -webkit-linear-gradient(left, 
				rgba(0, 0, 0, 0.9) 0%, 
				rgba(154, 72, 72, 0) 10%,
				rgba(0,0,0,0) 90%,
				rgb(0, 0, 0) 100%
				),url("images/black.jpg");
			clear: left;
			height: 200%;
			margin-left: 5%;
			margin-right: 5%;
			margin-bottom:10px;
			z-index: 0;
			/*padding-top: 20px;
			padding-bottom: 20px;*/
			position: relative;
			border-top: 1px solid white;
			border-bottom: 1px solid white;
		}
		img{
			border-radius:50%;
		}
		.history th{
			border-top:1px solid grey;
			border-bottom:1px solid grey; 
			width: 70px;
			font-size: 20px;
			text-align: center;
			color: #ce835b;
		}
		.history td {
			border-right:1px solid grey;
			border-left:1px solid grey; 
			width: 70px;
			text-align: center;
			color: #ce835b;
		}
		input[type=button]{
			-webkit-border-radius: 28;
			-moz-border-radius: 28;
			border-radius: 28px;
			font-family: Georgia;
			color: #ffffff;
			font-size: 12px;
			background-color:#704846;
			padding: 10px 20px 10px 20px;
			text-decoration: none;
		}

	</style>
	
</head>
<body>
	<div class="top" >
		<div class="top-left" >
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
		<div class="content-right" >
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
		<div class="layoutp">

			<div class="prof">
				MY PROFILE
			</div>
			<div class="pict">

				<?php 
				$pull="SELECT * FROM user_details WHERE user_id = $current_user_id";


				$result=mysqli_query($connection,$pull);
				$pics=mysqli_fetch_assoc($result);
				echo '<div class="imgLow">';
				echo "<img src='upload/$pics[url]' alt='profile picture' width='300' height='264' style='float:left;' class='doubleborder'/></div>";
				?>

			</div>
			<div class="info">
				<table  cellspacing="10px" cellpadding="10%" width="100px">
					<tr><td class="tag">NAME:</td><td> <?php echo $name ?></td></tr>
					<br>
					<tr><td class="tag">USERNAME:</td><td> <?php echo $username ?></td></tr>
					<br>
					<tr><td class="tag">LOCATION:</td> <td><?php echo $location ?></td></tr>
					<br>
					<tr><td class="tag">BIO:</td><td> <?php echo $bio ?></td></tr>
					<br>
				</table>
			</div>
			<br><br>
			<hr width="70%">
			<div class="history">
				TRAVEL HISTORY
				<table id="booked" style="width: 100%;">
					<tr>
						<th>S.No.</td>
							<th>Name</th>
							<th>Departure Time</th>
							<th>Arrival Time</th>
							<th>Price</th>
							<th>Cancel?</th>
						</tr>
					</table>
					<?php
					$db = mysql_connect("localhost",  "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
					$mydb=mysql_select_db("travelfreak");
					$sql="SELECT * FROM `final` WHERE user_id = '$current_user_id'" ;
					$result=mysql_query($sql);
					if($result)
					{	
						while($row=mysql_fetch_array($result))
						{
							if(is_null($row))
								echo "No Result";
							else
							{
								$name  = $row['name'];
								$dept_time = $row['dept_time'];	
								$arr_time = $row['arr_time'];
								$arr_date = $row['arr_date'];
								$dept_date = $row['dept_date'];
								$price = $row['price'];
								$n = $row['num'];
							}
							?>
							<center>

								<div class="outer_box" style="width: 1200px; height: 20%; padding: 9px; margin: 10px; border: 3px solid grey;border-radius: 20px; color: white; font: sans-serif; font-size: 20px; ">
									<div class="inner_box" style="margin-bottom: 2px; margin-top: 2px;">	
										<table style="width: 100%;">
											<tr>
												<td><?php echo $n; ?></td>
												<td><?php echo $name; ?></td>
												<td><?php echo $dept_time; ?></td>
												<td><?php echo $arr_time; ?></td>
												<td><?php echo $price; ?></td>
												<td><input type="button" id ="<?php echo $n ?>" name="cancel" value="Cancel Booking" onclick="cancel(this.id);"></td>
											</tr>
										</table>

									</div>
								</div>

							</center>
							<?php
						}
					}
					?>
				</div>
			</div>	

			<?php
			include("footer.php");
			?>






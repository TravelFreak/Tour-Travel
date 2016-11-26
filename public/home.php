
<?php 
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
	die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('Travelfreak');
if (!$select_db){
	die("Database Selection Failed" . mysql_error());
}
else{
	$flag=0;
	$sql="SELECT * FROM blog where sno=1";
	$result=mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$sql="SELECT * FROM blog where sno=2";
	$result=mysql_query($sql);
	$row2 = mysql_fetch_assoc($result);
	$sql="SELECT * FROM blog where sno=3";
	$result=mysql_query($sql);
	$row3 = mysql_fetch_assoc($result);
	if ($row > 0) {
		$flag=1;
	}
}		
?>


<!DOCTYPE html>
<html lang="en">
<head >
	<meta charset="utf-8">
	<title>Travel Anywhere !</title>
	
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/gallery1.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<style type="text/css">
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			padding-top: 100px; /* Location of the box */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
			position: relative;
			background-color: #fefefe;
			margin: auto;
			padding: 0;
			border: 1px solid #888;
			width: 80%;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
			-webkit-animation-name: animatetop;
			-webkit-animation-duration: 0.4s;
			animation-name: animatetop;
			animation-duration: 0.8s
		}

		/* Add Animation */
		@-webkit-keyframes animatetop {
			from {top:-300px; opacity:0}
			to {top:0; opacity:1}
		}

		@keyframes animatetop {
			from {top:-300px; opacity:0}
			to {top:0; opacity:1}
		}

		/* The Close Button */
		.close {
			color: white;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-header {
			padding: 2px 16px;
			background-color: #638ba0;
			color: white;
		}

		.modal-body {padding: 2px 16px;}

		.modal-footer {
			padding: 2px 16px;
			background-color: #638ba0;
			color: white;
		}

	</style>
	<script type="text/javascript">
		var count1 = 1;
		var total1 = 10;
		var count2 = 1;
		var total2 = 3;
/*
		function slide(a){
			var image = document.getElementById('img');
			count += a; 
			if(count>total){
				count = 1;
			}
			if(count < 1){
				count = 10;
			}
			image.src = "images/z" + count + ".jpg";

		}
		*/
		function change(){
			var places = ['url(\"images/3.jpg\")','url(\"images/2.jpg\")','url(\"images/5.jpg\")','url(\"images/6.jpg\")'];
			var k = document.getElementById('place').style.backgroundImage;
			str = "";
			if(k===places[0]){
				k = places[1];
				str += "HONG KONG";
			}
			else if(k===places[1]){
				k = places[2];
				str += "MEXICO";
			}
			else if(k===places[2]){
				k = places[3];
				str += "AUSTRALIA";
			}
			else if(k===places[3]){
				k = places[0];
				str += "HAWAII";
			}
			document.getElementById('place').style.backgroundImage = k;
			document.getElementById('write').innerHTML = str;
		}
/*
		function cancel(){
			document.getElementById('highbox').style.display="none";
			document.getElementById('cancel').style.display="none";
			document.getElementById('i1').style.display="none";
		}
		*/
	</script>
</head>
<body >
	<div class="top">
		<div class="top-left" >
			<ul class="top-one">
				<li id="first"><a href="" >+918588040053  </a></li>
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
	<div class="content" id="place" style="background-image: url('images/3.jpg');">
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
							<div class="dropdown-content" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);background-color: none;">
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
			<hr width="90%">
			<div class="block" id="name">
				<p class="circle" id="write">HAWAII</p>
			</div>
			<div class="arrow" >
				<img src="images/rightarrow.png" id="arr" onClick="change()">
			</div>
			
		</div>
		<div class="a_content">
			<div class="head" align="center">
				Top Tours
			</div>
			<div class="tour_desc" align="center">
				These are some of the most fascinating tour packages we have for you
			</div>
			<div class="places">
				<ul>
					<li><div class="block1">
						<img src="images/a.png" class="image"></img>
						<p class="place_name">San Francisco</p>
					</div></li>
					<li><div class="block1">
						<img src="images/a1.png" class="image"></img>
						<p class="place_name">Maldives</p>
					</div></li>
					<li><div class="block1">
						<img src="images/a2.png" class="image"></img>
						<p class="place_name">Ireland</p>
					</div></li>
					<li><div class="block1">
						<img src="images/a3.png" class="image"></img>
						<p class="place_name">New York</p>
					</div></li>
				</ul>
			</div>
		</div>
		<div class="offers" style="background: url('images/o1.jpg'); height: 400px;width: 90%;">
			<h1>Vote For Our Best Offers</h1>
			<p>
				<div align="center" style="margin-top:-5%;">
					
					<!-- Trigger/Open The Modal -->
					<button id="myBtn"><img src="images/vote.png" width="50px"></button>

					<!-- The Modal -->
					<div id="myModal" class="modal">

						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<span class="close">×</span>
								<h2>TravelFreak.com</h2>
							</div>
							<div class="modal-body">
								<br>
								<p><a href="UserVote.php" style="text-decoration:none">Click Here To Go To Voting Page</a><br><a href="voteresult.php" style="text-decoration:none">Click Here To Go Check Vote Results!</a></p>
							</div>
							<div class="modal-footer">
								<h3>&copy; 2016 Travel Freak | All Rights Reserved | </h3>
							</div>
						</div>

					</div>
					<script>
					// Get the modal
					var modal = document.getElementById('myModal');

					// Get the button that opens the modal
					var btn = document.getElementById("myBtn");

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];

					// When the user clicks the button, open the modal
					btn.onclick = function() {
						modal.style.display = "block";
					}

					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
						modal.style.display = "none";
					}

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					}
				</script>
				
			</div>
		</p>
	</div>
	<div class="news">
		<h1>News & Events</h1>
		<p>Here are some of the Blogs Of Our Users Connected With Us</p>
		<div class="blogs">
			<div class="blog">
				<div class="img">
					<img src="images/n1.jpg">
					<a href="blog.php" style="text-decoration:none; color:black;"><div style="margin:5px 10px;"><?php if($flag==1) echo substr($row['content'],0,270);echo "..."?></div></a>
				</div>
			</div>
			<div class="blog">
				<div class="img">
					<img src="images/n2.jpg">
					<a href="blog.php"  style="text-decoration:none; color:black;"><div style="margin:5px 10px;"><?php if($flag==1) echo substr($row2['content'],0,270); echo "..."?></div></a>
				</div>
			</div>
			<div class="blog">
				<div class="img">
					<img src="images/n3.jpg">
					<a href="blog.php"  style="text-decoration:none; color:black;"><div style="margin:5px 10px;"><?php if($flag==1) echo substr($row3['content'],0,270);echo "..."?></div></a>
				</div>
			</div>
		</div>
		<br>

	</div>

	<?php
	include("footer.php");
	?>
<?php include("../includes/database_connection.php");?>
<!DOCTYPE html>
	<head>
	<title>Vote</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		function VoteNow(item) {
          $.ajax({
            type: 'post',
            url: 'UserVote2.php',
            data: {'variable':item},
            success: function (result) {
              alert(result);
            }
          });
          window.location.href = "voteresult.php";
      }


	</script>
	<style type="text/css">
		#OnTop { z-index: 1000;
		color: white;}
		body{
			font-family: "Segoe UI Light", "Segoe UI", Arial,Helvetica,sans-serif;
			font-weight: bold;
			background-image: repeating-linear-gradient(to bottom right, black 0%, #52d3aa 100%);
		  	background-image: -ms-repeating-linear-gradient(top left, white 0%, #52d3aa 100%);
			
		}
		div{
			float:left;
			margin: 0px 20px;
		}
		.container{
			width: 80%;
			height: 100%;
			margin: 2% 10%;
		}
		.row{
			width: 100%;
			margin: 2% 1%;
		}
		#left{
			border: 7px solid rgba(7, 105, 134, 0.33);
			border-radius: 20% 40%;
			height: 200px;
			width: 200px;
		}
		#right{
			border: 7px solid rgba(7, 105, 134, 0.33);
			border-radius: 40% 20%;
			height: 200px;
			width: 200px;
			
		}
		.gradient {
		  opacity: .9;
		  background-image: repeating-linear-gradient(to bottom right, #3f95ea 0%, #52d3aa 100%);
		  background-image: -ms-repeating-linear-gradient(top left, #3f95ea 0%, #52d3aa 100%);
		  border-radius: 10% 10% 0% 0%;
		}
		.head{
			width: 90%;
			height: 100%;
			margin: 0px 3.5%;
			 opacity: .9;
		color:white;
		}
		img:hover {
		    opacity: 0.5;
		}
	
	</style>
	</head>
	<body>
	<center>
	<div class="head" align="center">	
	<font size="60px" align="center">TravelFreak</font>
	<hr width="50%">
	<h2 align="center">Vote For The Best Package You Found With Us</h2>
	</div>
	<div id="OnTop"></div>
	<form method="post" action="UserVote.php">
<div class="gradient">
	<div class="container">
			<div class="row">
				<div class="A">
					<img id="left" src="images/2.jpg" onclick="VoteNow('Hong Kong');"><br>
					<span>Hong Kong</span>
				</div>
				<div class="B">
					<img id="left" src="images/3.jpg " onclick="VoteNow('Hawaii');"><br>
					<span>Hawaii</span>
				</div>
				<div class="C">
					<img id="right" src="images/4.jpg" onclick="VoteNow('Los Angeles');"><br>
					<span>Los Angeles</span>
				</div>
				<div class="D">
					<img id="right" src="images/5.jpg" onclick="VoteNow('California');"><br>
					<span>California</span>
				</div>
			</div>
			<div class="row">
				<div class="A">
					<img id="left" src="images/6.jpg" onclick="VoteNow('Australia');"><br>
					<span>Australia</span>
				</div>
				<div class="B">
					<img id="left" src="images/g1.jpg" onclick="VoteNow('Chicago');"><br>
					<span>Chicago</span>
				</div>
				<div class="C">
					<img id="right" src="images/n4.jpg" onclick="VoteNow('Mexico');"><br>
					<span>Mexico</span>
				</div>
				<div class="D">
					<img id="right" src="images/new.jpg" onclick="VoteNow('New York');"><br>
					<span>New York</span>
				</div>
			</div>
	
	</div>
	</div>
	</form>
	</center>
	</body>
</html>
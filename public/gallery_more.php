<?php
	include("header.php");
?>

	<div class="extra">
		<div class="extra_head">
			Our Collection 
		</div>
		<div class="container">
			<img id="img" src="images/z1.jpg">
			<div id="left_div">
				<img id="left" onClick="slide(-1)" src="images/leftarrow.png">
			</div>
			<div id="right_div">
				<img id="right" onClick="slide(1)" src="images/rightarrow.png">
			</div>
		</div>
		<div class="about1" style="background-color: white;position: absolute;width: 80%;margin-left: 0%;margin-right: 10%;padding-left: 0%;padding-right: 10%;float: center;">
			<div class="add">
				<div class="about_head">Address</div>
				<p>
					Cyber City<br>
					Phase IV, Gurgaon<br>
					Phone : +01244085085<br>
					Email : travel.freak@anywhere.com<br>
				</p>
			</div>
			<div class="nav">
				<div class="about_head">Navigation</div>
				<p>
					<a href="about_us.php">About</a><br>
					<a href="">Follow</a><br>
					<a href="">Gallery</a><br>
					<a href="contact_us.php">Contact</a><br>
				</p>
			</div>
			<div class="follow">
				<div class="about_head">Follow</div>
				<p>
					<a href="facebook.com">Facebook</a><br>
					<a href="google.com">Google</a><br>
					<a href="twitter.com">Twitter</a><br>
					<a href="linkedin.com">Linkedin</a><br>
				</p>
			</div>
			<div class="newsletter">
				<div class="about_head">Newsletter</div>
				<p>
					<form>
						<input type="email" name="email" placeholder="Enter your email here" style=" height: 2.5em; width: 20em;" required="required"></input>
						<input type="submit" name="submit" value="Subscribe" onclick="window.location.href=\"subscribe.php\" " style="margin-top: 1em;padding: 0.8em;width: 10em;"></input>
					</form>
				</p>
			</div>
			<div class="footer" style="color: grey;">
				&copy; 2016 Travel Freak | All Rights Reserved | 
			</div>
		</div>	
</body>
</html>
<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Contact Us !</title>
	<link href=".../css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/krishna.css">
	<link rel="stylesheet" type="text/css" href="css/gallery1.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<script type="text/javascript">
		function swap()
		{
			var sou = document.myform.source.value;	
			var des = document.myform.destination.value;
			document.myform.source.value = des;
			document.myform.destination.value = sou;
		}
		function additiona()
		{
			var q = parseInt(document.myform.adults.value);
			q += 1;
			document.myform.adults.value = q;	
		}
		function subtractiona()
		{
			var q = parseInt(document.myform.adults.value);
			q -= 1;
			document.myform.adults.value = q;
		}
		function additionb()
		{
			var q = parseInt(document.myform.children.value);
			q += 1;
			document.myform.children.value = q;	
		}
		function subtractionb()
		{
			var q = parseInt(document.myform.children.value);
			q -= 1;
			document.myform.children.value = q;
		}
		function additionc()
		{
			var q = parseInt(document.myform.infants.value);
			q += 1;
			document.myform.infants.value = q;	
		}
		function subtractionc()
		{
			var q = parseInt(document.myform.infants.value);
			q -= 1;
			document.myform.infants.value = q;
		}
	</script>
</head>
<body>
	<div class="layout_contact_us" >
		<div>
			<h2 style="font-size: 60px;text-align: center; color: white; font-family: "Segoe UI Light","Segoe UI",Arial,Helvetica,sans-serif, cursive;">Want a Train</h2>
		</div>
		<div class="travelpage-flight">
				<form method="post" style="color: white; text-align: center;" class="login" action="railsearch1.php" name="myform">
					<div class="outer_box">
						<div class="from-to">
							<p class="from-caption">From</p>
							<input type="textarea" name="source" id="source" placeholder="Depart From" autocomplete="on" required="required">
							<input type="image" src="images/2way_icon_small.png" style="width: 20px; height: 20px;" onclick="swap();">
							<input type="textarea" name="destination" id="destination" placeholder="Going To" autocomplete="on" required="required">
							<p class="to-caption">To</p>
						</div>
						<center>
						<table>
							<tr>
								<td>Departure Date</td>
								<td>
									<input class="textbox-n" type="text" onmouseover ="(this.type='date')"  id="date" name="departure" required="required" placeholder="Departure Date" min="2017-01-01" max="2017-01-05">
								</td>
							</tr>
							<tr>
								<td>Return Date</td>
								<td>
									<input class="textbox-n" type="text" onmouseover="(this.type='date')"  id="date" name="Arrival" required="required" placeholder="Return Date" min="2017-01-01" max="2017-01-05"><!-- </p> -->
								</td>
							</tr>
						</table>
						</center>
						<div>
							<span>
								<input type="button" name="sub" id="sub" value="-" onclick="subtractiona();">
								<input type="textarea" id="adults" name="adults" min="1" max="10" placeholder="Adults" onfocus="this.type='number'; this.value=1;">
								<input type="button" name="add" id="add" value="+" onclick="additiona();">
							</span>
							<br>
							<span>
								<input type="button" name="sub" id="sub" value="-" onclick="subtractionb();">
								<input type="textarea" name="children" id="children" min="1" max="10" placeholder="Children" onfocus="this.type='number'; this.value=1;">
								<input type="button" name="add" id="add" value="+" onclick="additionb();">
							</span>
							<br>
							<span>
								<input type="button" name="sub" id="sub" value="-" onclick="subtractionc();">
								<input type="textarea" name="infants" min="1" id="infants" max="10" placeholder="Infants" onfocus="this.type='number'; this.value=1;">
								<input type="button" name="add" id="add" value="+" onclick="additionc();">
							</span>
						</div><br>
						<input type="checkbox" name="Dates" value="Dates">My dates are flexible<br>
						<input type="checkbox" name="Classes" value="Classes">My classes are flexible
						<br><br>
						<select name="dropdown" size="1" style = "border-radius : .5em;">
							<option value="Sleeper" selected="1" >Sleeper</option>
							<option value="ThirdAC" >Third AC</option>
							<option value="SecondAC" >Second AC</option>
							<option value="FirstAC" >First AC</option>
							<option value="SecondSeating" >Second Seating</option>
							<option value="ACChairCar" >ACChairCar</option>
							<option value="FirstClass" >First Class</option>
							<option value="ThirdACEconomy" >Third AC Economy</option>
						</select><br><br>
						<input type="radio" name="faretype" value="Normal Fare" checked="1">Normal Fare
						<input type="radio" name="faretype" value="Special Return Fare">Special Return Fare
						<input type="radio" name="faretype" value="GDS Special Return Fare">GDS Special Return Fare<br><br>
						<input type="submit" name="submit" value="Book!">
					</div>
				</form>
		</div>
	</div>
	</body>
</html>
<?php
include("footer.php");
?>

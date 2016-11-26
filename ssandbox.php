<!DOCTYPE html>
<html>
<head>
	<title> Sandbox </title>
	<style>
		#lowbox{
			height: 200vh;
			width: 200vw;
			position:absolute;
			z-index: 1;
			background-image: url("public/images/2.jpg");
		}
		#highbox{
			height: 200vh;
			width: 200vw;
			position:absolute;
			z-index: 2;
			display:block;
			background-color: rgba(0,0,0,0.6);
		}
		#highbox p{
			color: white;
		}
	</style>
</head>
<body>

<div id = "lowbox" >

</div>

<div id = "highbox">
	<div id = "modal">
		<p>Mera naam chutiya</p>
	</div>
</div>



</body>
</html>
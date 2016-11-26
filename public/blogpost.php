<?php include("header.php"); ?>
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
		if(isset($_POST['postblog']))
		{
		$trn_date = date("Y-m-d H:i:s");
		$heading=$_POST["heading"];
		$author=$_POST["author"];
		$content=$_POST["content"];
		$flag=0;
		$sql="INSERT INTO `blog`(`sno`, `heading`, `content`, `author`, `date`) VALUES (DEFAULT,'$heading','$content','$author','$trn_date')";
		$result=mysql_query($sql);
		if($result){
			$flag=1;
		}
	}
		}		
?>
<form method="post">
 <div class="blogpost">
	<div class="heading"><h1>Heading: <input type="text" name="heading"></h1></div>
	<div class="publish_info">Author: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="author">	</div><br>
	<div class="content">Content:<br><center><textarea rows="20" cols="100" name="content"></textarea></center> </div>
	<center><a href="blog.php"><button class="button button5" name="postblog"> Post </button></a></center>
	<center><?php if($flag==1) echo "Posted Succesfully !!"; ?></center>
</div>
</form>

<hr width="90%" size="5" color="grey">
<?php include("footer.php");?>

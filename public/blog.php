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
		$sql="SELECT * FROM blog ORDER BY RAND() LIMIT 1";
		$result=mysql_query($sql);
		$row = mysql_fetch_assoc($result);
		if ($row > 0) {
	    $flag=1;
		}
		}		
?>
 <div class="blogtext">
	<div class="heading"><h1><?php if($flag==1) echo $row['heading'];?></h1></div>
	<div class="publish_info"><?php if($flag==1) echo $row['author'];?>	</div>
	<div class="content"><?php if($flag==1) echo $row['content'];?></div>
	<center><a href="blog.php"><button class="button button5"> Next </button></a></center>
</div>


<hr width="90%" size="5" color="grey">
<?php include("footer.php");?>

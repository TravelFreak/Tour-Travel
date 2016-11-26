<?php include("../includes/database_connection.php");?>

<?php

$item=$_POST['variable'];
$sql="SELECT * FROM `vote` where city='$item'";
$result=mysqli_query($connection,$sql);
if(!$result){
	echo "NO";
}
while($row = mysqli_fetch_assoc($result)){
	$new = $row['votes']+1;
	$sql2="UPDATE `vote` SET `votes`='$new' WHERE `city`='$item'";
	$result2=mysqli_query($connection,$sql2);
	if($result2){
		echo "Thank You For Voting";
	}
}

//$sql="UPDATE `vote` SET `votes`=[value-2] WHERE city='$item'";

?>
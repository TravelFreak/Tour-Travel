<?php
include("../includes/database_connection.php");
include("../includes/functions.php");
include("../includes/session.php");
?>

<?php

$a = $_POST['a'];

$user_id = $_SESSION['current_user_id'];

$query = "DELETE FROM `final` WHERE user_id = $user_id AND num = $a";
$result = mysqli_query($connection,$query);
if(!$result){
	echo "Deletion failed";
}
else{
	echo "Deleted";
}
?>
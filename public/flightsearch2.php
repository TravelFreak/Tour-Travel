<?php
include("../includes/database_connection.php");
?>
<?php
session_start();
//print_r($_SESSION)
if(isset($_SESSION["fname"]))
// echo "user: Hi " . $_SESSION["fname"];
?>
<?php

$a = $_POST['a'];

$user_id = $_SESSION['current_user_id'];
$array = explode(',',$a);
$num = (int)$array[0];
$table = $array[1];
if($table == '11')
{
	$sql="SELECT * FROM `chennai` WHERE num = $num";
	$result=mysqli_query($connection,$sql);
	if(!$result)
	{
		echo "Could not enter data: ";
	}
	else
	{
		$row = mysqli_fetch_array($result);
		$kri = $row['name'];
		$source = $row['source'];
		$destination = $row['destination'];
		$dept_time= $row['dept_time'];	
		$arr_time = $row['arr_time'];
		$arr_date = $row['arr_date'];
		$dept_date = $row['dept_date'];
		$price = $row['price'];
		$n = $row['num'];
		$sql="INSERT INTO final (name, source, destination, dept_time, arr_time, dept_date, arr_date, price, user_id) VALUES ('$kri', '$source', '$destination', '$dept_time', '$arr_time', '$dept_date', '$arr_date', '$price','$user_id')";
		$result=mysqli_query($connection,$sql);
		if(!$result)
		{
			echo "Not Booked!";
		}
		else
		{
			echo "Booked!";
		}	
	}
}
?>	
<?php
include("../includes/database_connection.php");
include("../includes/functions.php");
include("../includes/session.php");
?>

<?php 
if(!logged_in())
{
	redirect_to("login.php");
}
?>

<?php
$current_username=$_SESSION['current_username'];
$error_in_change="";
if(isset($_POST['save_changes']))
{
	$new_username=mysql_entities_fix_string($_POST['new_username']);
	$location=mysql_entities_fix_string($_POST['location']);
	$bio=mysql_entities_fix_string($_POST['bio']);
	$bday=$_POST['bday'];
	$new_username_available=valid_username($new_username,$connection);
	if($current_username==$new_username)
		$new_username_available=1;
	else
		$new_username_available=valid_username($new_username,$connection);
	if($new_username_available==1)
	{
		$updated_username=update_username($current_username,$new_username,$connection);
		$current_username=$new_username;
		$_SESSION['current_username']=$current_username;
		$updated_bio=update_bio($current_username,$bio,$connection);
		$updated_location=update_location($current_username,$location,$connection);
		$updated_birthday=update_birthday($current_username,$bday,$connection);
		if($updated_username && $updated_location && $updated_bio)
			echo "Updated";
		else
			echo "update failed";
	}
	else
	{
		$error_in_change="Username not available.";
		echo "$error_in_change";
	}
}
?>

<?php
global $url;
$current_user_id=$_SESSION['current_user_id'];
$pull="SELECT * FROM user_details WHERE user_id = $current_user_id";

$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
$extension = @end(explode(".", $_FILES["file"]["name"]));
if(isset($_POST['pupload']))
{
	echo "$current_user_id";
	if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/JPG") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg"))
		&& ($_FILES["file"]["size"] < 2000000)
		&& in_array($extension, $allowedExts))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		}
		else
		{
			echo '<div class="plus">';
			echo "Uploaded Successully";
			echo '</div>';

			echo"<br/><b><u>Image Details</u></b><br/>";

			echo "Name: " . $_FILES["file"]["name"] . "<br/>";
			echo "Type: " . $_FILES["file"]["type"] . "<br/>";
			echo "Size: " . ceil(($_FILES["file"]["size"] / 1024)) . " KB"; 

			if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
				unlink("upload/" . $_FILES["file"]["name"]);
			}
			else
			{
				$pic=$_FILES["file"]["name"];
				$conv=explode(".",$pic);
				$ext=$conv[1];

				move_uploaded_file($_FILES["file"]["tmp_name"],
					"upload/". $current_user_id.".".$ext);
				echo "Stored in as: " . "upload/" . $current_user_id.".".$ext;
				$url=$current_user_id.".".$ext;

				$query="UPDATE user_details SET url='$url' where user_id = $current_user_id";
				$result=mysqli_query($connection,$query);
				if($result)
				{
					echo "<br/>Saved to Database successfully";
				}
			}
		}
	}
	else
		echo "File Size Limit Crossed 2 MB Use Picture Size less than 2 MB";
}
?>
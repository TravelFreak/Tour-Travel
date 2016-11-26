<?php
include("../includes/database_connection.php");
include("../includes/functions.php");
include("../includes/session.php");
include("header.php");
?>

<?php 
if(!logged_in())
{
	redirect_to("login.php");
}
?>

<?php
$outputy = "";
$outputn = "";
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
			$outputy .= "Updated";
		else
			$outputn .= "update failed";
	}
	else
	{
		$outputn .="Username not available.";
		
	}
}
?>

<?php
$outputn1 = "";
$outputy1 = "";
global $url;
$current_user_id=$_SESSION['current_user_id'];
$pull="SELECT * FROM user_details WHERE user_id = $current_user_id";

$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
$extension = @end(explode(".", $_FILES["file"]["name"]));
if(isset($_POST['pupload']))
{
	if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/JPG") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg"))
		&& ($_FILES["file"]["size"] < 2000000)
		&& in_array($extension, $allowedExts))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			$outputn1 .= "Return Code: " . $_FILES["file"]["error"];
		}	
		else
		{
			$outputy1 .= "Uploaded Successully";

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

				$url=$current_user_id.".".$ext;

				$query="UPDATE user_details SET url='$url' where user_id = $current_user_id";
				$result=mysqli_query($connection,$query);
				if(!$result)
				{
					$outputn1 .= "<br/>Can't be saved to Database ";
				}
			}
		}
	}
	else
		$outputn1 .= "File Size Limit Crossed 2 MB Use Picture Size less than 2 MB";
}
?>

<div class="layout_contact_us">
	<div>
		<h2 style="font-size: 60px;text-align: center; font-family: 'Segoe UI Light', 'Segoe UI', Arial,Helvetica,sans-serif;">Profile Settings</h2>
	</div>
	<div class="queries" style="color: black; margin-left: 30%;">
		<div class="queries_content">
			<form  action="profile_settings.php" method='POST' enctype="multipart/form-data" style="color: black;"> 
				<p> 
					<label for="username" class="uname" data-icon="u" > Username :</label>&nbsp;
					<input id="name" name="new_username" type="text" placeholder="mynewusername" style="height: 1em;padding: 1em;width: 24em;" required />
				</p>
				<p> 
					<label for="location" class="Location" data-icon="e" > Location :</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<input id="location" name="location" type="text" placeholder="mylocation" style="height: 1em;padding: 1em;width: 24em;" required /> 
				</p>
				<p> 
					<label for="Bio" class="Bio" data-icon="e" > Bio :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input id="bio" name="bio" type="text" placeholder="mybio" style="height: 1em;padding: 1em;width: 24em;" required /> 
				</p>
				<p> 
					<label for="Birthday" class="Birthday" data-icon="e" > Birthday :</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<input id="birthday" name="bday"  type="date" placeholder="mybirthday" style="height: 1em;padding: 1em;width: 24em;" required /> 
				</p>
				<p class="sign up button" align="center"> 
					<input type="submit" name="save_changes" value="Save Changes">
				</p>
				<?php 
				echo "<div style=\"margin-left: 5%;font-size: 100%;color: #00FF00;\">";
				echo $outputy; 
				echo "</div>";
				?>
				<?php 
				echo "<div style=\"margin-left: 5%;font-size: 100%;color: red;\">";
				echo $outputn; 
				echo "</div>";
				?>
				<p align="center">
					<input type="file" name="file"  />
				</p>
				<p class="sign up button" align="center"> 
					<input type="submit" name="pupload" class="button" value="Upload" />
				</p>
				<?php 
				echo "<div style=\"margin-left: 15%;font-size: 90%;color: #00FF00;\">";
				echo $outputy1; 
				echo "</div>";
				?>
				<?php 
				echo "<div style=\"margin-left: 15%;font-size: 90%;color: red;\">";
				echo $outputn1; 
				echo "</div>";
				?>
			</form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
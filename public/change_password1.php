<?php
include("../includes/functions.php");
include("../includes/session.php");
include("../includes/database_connection.php");
?>

<?php
$username=$_SESSION['username'];
$old_password=mysql_entities_fix_string($_POST['old_password']);
$new_password=mysql_entities_fix_string($_POST['new_password']);
$confirm_password=mysql_entities_fix_string($_POST['confirm_password']);
if($new_password==$confirm_password)
{
	$validation_of_old_password=attempt_login($username,password_hashing($old_password),$connection);
	if($validation_of_old_password)
	{
		$updated_password=update_password($username,$confirm_password,$connection);
		if($updated_password)
			echo "Password changed";
		else
			echo "Password change failed";
	}
	else
		echo "Incorrect Password";
}
else
	echo "Passwords do not match";

?>
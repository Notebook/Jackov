<?php
/***************************************
* Jackov - Project Management Solution *
****************************************
* User.php - Register/Login            *
* @author - Composition Notebook       *
* @version - 1.0                       *
***************************************/

error_reporting(E_ALL);

include_once "engine/connect.inc.php";
include_once "engine/users.inc.php";

$error = array();

if (isset($_POST['submit'])) {

	if (empty($_POST['user'])) {
		$error[] = 'Please provide a username.';
	}
	
	if (empty($_POST['pass'])) {
		$error[] = 'Please provide a password.';
	}
	
	if (empty($_POST['email'])) {
		$error[] = 'Please provide an email.';
	}
	
	if ($_POST['pass'] !== $_POST['cpass']) {
		$error[] = 'Please make sure both passwords are the same.';
	}
	
	if ($_POST['email'] !== $_POST['cemail']) {
		$error[] = 'Please sure make both emails are the same.';
	}
}

?>

<!doctype html>
<html>
	<head>
		<title>Dynamic - Need to Add</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	</head>
	
	<body>
		<form method="post" action="user.php">
			<input type="text" name="user" placeholder="Username" value="<?php if (isset($_POST['user'])) { echo htmlentities($_POST['user']); } ?>"/> <br />
			<input type="password" name="pass" placeholder="Password" /> <br />
			<input type="password" name="cpass" placeholder="Confirm Password"/> <br />
			<input type="text" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])) { echo htmlentities($_POST['email']); } ?>"/> <br />
			<input type="text" name="cemail" placeholder="Confirm Email"/> <br />
			<input type="submit" name="submit" value="Register">
		</form>
	<p>	
		<?php
		
			if (empty($errors) === false) {
	
				foreach ($error as $errors) {
					echo "<b> - {$errors} <br /></b>";
				}
			}
			
		?>
	</p>
	
	</body>
</html>
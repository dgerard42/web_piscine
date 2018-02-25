<?php
function logon_init(){
	$admin_usr = "admin";
	$admin_password = "mary_shelley";
	$user_password = "rip_silk_road";
	$username_err = $password_err = "";
	$username = $_GET['username'];
	$password = $_GET['password'];
	if ("OK" == $_GET['submit']) {
		if ($username == $admin_usr && $password == $admin_password) {
			session_start();
			echo "welcome admin";
			$_SESSION['login'] = "admin";
			$_SESSION['access'] = "full";
		} else if ($username == true && $password == $user_password) {
			session_start();
			echo "welcome user";
			$_SESSION['login'] = $username;
			$_SESSION['access'] = "basic";
		} else {
			echo "incorrect login";
			if ($username == false){
				$username_err = "please type a username";
			}if ($password == false){
				$password_err = "please type a password";
			}
		}
	}
}
?>

<html>
<title>enter valid credentials for access to the marketplace</title>
<body>
	<form action="logon.php" method="get">
		<p><span class="error">* required field.</span></p>
		<p>Username: <input type="text" name="username" value=<?php echo $username; ?>>
		<span class="error">* <?php echo $username_err;?></span></p>
		<p>Password: <input type="text" name="password" value=<?php echo $password; ?>>
		<span class="error">* <?php echo $password_err;?></span></p>
		<input type="submit" name="submit" value="OK">
	</form>
</body>
</html>

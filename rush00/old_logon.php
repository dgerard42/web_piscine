<?php
	$login = $password = "";
	$login_err = $pass_err = $action_err = "";

	if ("OK" == $_GET['submit']) {
		if ($_GET['login'] == ""){
			$login_err = "login is required!";
		} else {
			$login = $_GET['login'];
		} if ($_GET['password'] == ""){
			$password_err = "password is required!";
		} else {
			$password = $_GET['password'];
		}
		if ($login != "" && $password != "") {
			session_start();
			$_SESSION['id'] = session_id();
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;
			$_SESSION['total_cost'] = "0 BTC";
		} else {
			$action_err = "please complete all fields";
		}
	}
?>

<html>
<body>
<form action="logon.php" method="GET">
		<span class="error">* required field.</span>
		Login: <input type="text" name="login" value=<?php echo $login; ?>>
		<span class="error">* <?php echo $login_error;?></span>
		Password: <input type="text" name="password" value=<?php echo $password; ?>>
		<span class="error">* <?php echo $pass_error;?></span>
		<input type="submit" name="submit" value="OK" />
		<span class="error">* <?php echo $action_error;?></span>
	</form>
</body>
</html>

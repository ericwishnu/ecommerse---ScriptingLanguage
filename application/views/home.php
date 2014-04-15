<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php
	$session = $this->session->userdata('user_session');
	if($session == null || $session == ''){
		?>
		<form action="<?php echo URL;?>index.php/user/signin" method="post">
			<table>
				<tr>
					<td><label for="username">Username</label></td>
					<td><input type="text" name="username" id="username"/></td>
				</tr>
				<tr>
					<td><label for="password">Password</label></td>
					<td><input type="password" name="password" id="password"/></td>
				</tr>
				<tr>
					<td><input type="submit" value="SignIn"/></td>
				</tr>
			</table>
		</form>
		<a href="<?php echo URL?>index.php/user/signup_page">Don't have account?</a>
		<?php
	}
	else{
		?>
		You're Logged In.
	<form action="<?php echo URL;?>index.php/user/signout" method="post">
		<input type="submit" value="SignOut">
	</form>
		<?php
	}
?>
</body>
</html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<form action="<?php echo URL?>index.php/user/signup_action" method="post">
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
				<td><label for="name">Name</label></td>
				<td><input type="text" name="name" id="name" /></td>
			</tr>

			<tr>
				<td><label for="email">Email</label></td>
				<td><input type="email" name="email" id="email"/></td>
			</tr>

			<tr>
				<td><input type="submit" value="SignUp"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
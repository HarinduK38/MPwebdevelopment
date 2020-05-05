<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>


<h1> Welcome to login page </h1>


<form action = "registeringuser.php" method = "post">
					<label for="username"><b>username</b></label>
					<input type="text" placeholder="Enter" name="username" required>
					<br>
					<label for="password"><b>password</b></label>
					<input type="password" placeholder="Enter" name="password" required>
					<br>
					<label for="firstname"><b>Firstname</b></label>
					<input type="text" placeholder="Enter" name="firstname" required>
					<br>
					<label for="lastname"><b>Lastname</b></label>
					<input type="text" placeholder="Enter" name="lastname" required>
					<br>
					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="email" required>
					<br>
					<button type="submit" class="registerbtn">Register</button>
</form>
</body>
</html>
<!DOCTYPE html>

<html lang="en">

<head>
	<title>My PHP FORMS page with Bootstrap</title>


</head>

<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<body>
	<?php
    session_start();

    if (isset($_SESSION['login_failed']) && !empty($_SESSION['login_failed'])) {
        echo "<div class='alert alert-danger' role='alert'><strong>ALERT</strong> LOGIN INCORRECT!</div>";
    } else {
        echo "<div class='alert alert-info' role='alert'><strong>HELLO</strong> PLEASE LOGIN (SESSION VARIABLES NOT WORKING)</div>";
    }
?>


	<form name = "LoginForm" method = "post" action = "lecture7_login_process_spring2024.php">
	
	<div class = "form-group-row">
		<div class = "col-sm-4">
			<div class = "form-group">
				<label for "username">USERNAME</label>
				<input name = "username" class = "form-control" id = "username" placeholder = "Enter Username...">
			</div>
		</div>
	</div>
	
	<div class = "form-group-row">
		<div class = "col-sm-4">
			<div class = "form-group">
				<label for "password">PASSWORD</label>
				<input name = "password" type = "password" class = "form-control" id = "password" placeholder = "Enter Password...">
			</div>
		</div>
	</div>
	
	<div class = "form-group-row">
		<div class = "col-sm-4">
			<div class = "form-group">
				<button type = "submit" name = "submit" class = "btn btn-primary">Submit Login</button>
			</div>
		</div>
	</div>
	
	</form>

</body>


</html>
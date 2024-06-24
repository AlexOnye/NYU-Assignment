<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My PHP Forms with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>My First PHP Bootstrap 4 Page</h1>
    <p>Resize this responsive page to see the effect.</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="hw4_Alexander_Onyegbula_PHP_Spring2024.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="lecture1_html_bs.html">Lecture 1</a></li>
            <li class="nav-item"><a class="nav-link" href="lecture2_css.html">Lecture 2</a></li>
            <li class="nav-item"><a class="nav-link" href="lecture3_js.html">Lecture 3</a></li>
            <li class="nav-item"><a class="nav-link" href="lecture4_bs.html">Lecture 4</a></li>
            <li class="nav-item"><a class="nav-link" href="lecture5_php.php">Lecture 5</a></li>
			<li class="nav-item"><a class="nav-link" href="Contact_Us.php">Contact Us</a></li>
			<li class="nav-item"><a class="nav-link" href="Login_Spring2024.php">Login</a></li>
			<li class="nav-item"><a class="nav-link" href="PHP_Forms_Spring2024.php">PHP Forms</a></li>
        </ul>
    </div>
</nav>


	<?php
    session_start();

    if (isset($_SESSION['login_failed']) && !empty($_SESSION['login_failed'])) {
        echo "<div class='alert alert-danger' role='alert'><strong>ALERT</strong> LOGIN INCORRECT!</div>";
    } else {
        echo "<div class='alert alert-info' role='alert'><strong>HELLO</strong> PLEASE LOGIN (SESSION VARIABLES NOT WORKING)</div>";
    }
?>


	<form name = "LoginForm" method = "post" action = "login_process_spring2024.php">
	
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
	
<script src ="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src ="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src ="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>


</html>
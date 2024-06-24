<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>My First Bootstrap 4 Page</h1>
    <p>Resize this responsive page to see the effect.</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="hw3_Alexander_Onyegbula_PHP_Spring2024.php">Home</a>
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
        </ul>
    </div>
</nav>

<div class="row justify-content-center">
    <div class="col">
        <?php
        session_start();

        $name = $name_message = "";

        if (isset($_SESSION['myform_name'])) {
            $name = $_SESSION['myform_name'];
            $name_message = $_SESSION['myform_name_message'];
            unset($_SESSION['myform_name'], $_SESSION['myform_name_message']);
        }
        ?>
        <hr>
        <form id="myform" method="post" action="Process_Spring2024.php">
            <label for="name">Name with ACTION SCRIPT</label>
            <input id="name" type="text" name="name" value="<?php echo $name; ?>"><br>
            <button id="submit2" type="submit" name="submit">Submit</button><br>
            <?php echo $name_message ?>
        </form>

        <form action="Contact_Us.php">
            <button id="submit" type="submit">RESET</button>
        </form>
	</div>
</div>
		
<br/>
<hr/>

<div class="row justify-content-center">
    <div class="col">
        <form method="post" action="contactus_process.php">
            <label>Name:</label>
            <input name="sender"><br>

            <label>Email:</label>
            <input name="senderEmail"><br>

            <label>Memos:</label>
            <textarea rows="5" cols="20" name="message"></textarea><br>

            <input type="submit" name="submit_contact">
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
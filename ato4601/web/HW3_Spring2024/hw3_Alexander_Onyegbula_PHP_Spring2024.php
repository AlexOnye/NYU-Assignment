<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Homework 3 Spring 2024 Bootstrap and PHP Framework</title>
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

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-md-3">
            <h2>My Picture</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img src="https://media.licdn.com/dms/image/D4D03AQHbEGLkSDVALw/profile-displayphoto-shrink_400_400/0/1709236841834?e=1715212800&v=beta&t=m7w3XXivQ60bgEIF_eH90YCRBl1LUs7za_gMJVmJIBQ" class="img-fluid" alt="My Image">
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "Alexander Onyegbula"; ?></h5>
                    <p class="card-text"><?php echo "Age: 23"; ?></p>
                    <p class="card-text"><?php echo "I graduated with a second upper class for my bachelors in Economics, and am currently pursuing a masters degree in Management and Systems at New York University."; ?></p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <h5>Contact Information</h5>
                    <p>Email: <?php echo "ato4601@nyu.edu"; ?></p>
                    <p>Phone: <?php echo "+19178349209"; ?></p>
                </div>
                <div class="col-md-6">
                    <h5>Skills</h5>
                    <ul>
                        <?php
                        $skills = array("Database Design", "SQL", "Data Modeling");
                        foreach ($skills as $skill) {
                            echo "<li>$skill</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h5>External Links</h5>
            <p><a href="https://www.linkedin.com/in/alexander-onyegbula-45127a17a/" target="_blank">LinkedIn Profile</a></p>
        </div>
    </div>
	
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
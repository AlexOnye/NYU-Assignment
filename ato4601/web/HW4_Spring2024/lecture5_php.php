<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Lecture 5 PHP</title>
</head>
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<body>
	<div class = "jumbotron text-center" style = "margin-bottom:0">
		<h1>My First Bootsrap 4 Page</h1>
		<p>Resize this responsive page to see the effect.</p>
		
	</div>
	
	<main role = "main">
		<div class = "container">
			<div class="jumbotron">
				<h1>Learning and Testing PHP</h1>
				<p class ="lead">Learning about PHP and configuring it on the server</p><a href="#" target="_blank" class = "btn btn-success btn-lg">Click here to see more</a></p>
			</div>
			
			
		</div>
		
	<nav class = "navbar navbar-expand-sm bg-dark navbar-dark">
	<a class = "navbar-brand" href="hw4_Alexander_Onyegbula_PHP_Spring2024.php">Home</a>
	<button class = "navbar-toggler" type = "button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class = "navbar-toggler-icon"></span>
	</button>
	
	<div class = "collapse navbar-collapse" id="collapsibleNavbar">
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
		
		<div class = "row">
						
			<div class = "col">
				<?php
				//Create three variables
				$name = "Alexander Onyegbula";
				$age = "22";
				$address = "7 East 12th Street, New York, NY, 10101";
				
				
				
				echo $name." works at ".$address." and likes to be the age of ".$age." years old";
				
				
				?>
				
			</div>
			
			<div class = "col">
				<?php
				//Create Three Variables
				$name = "Alexander Onyegbula";
				$age = "22";
				$address = "7 East 12th Street, New York, NY, 10101";
				
				
				
				echo '$name works at $address and like to be the age of $age years old.'."<br>";
				echo "$name works at $address and like to be the age of $age years old.";
				
				
				?>
				
			</div>
			
			
		<!-- Variables Scope: Local -->
			
			<div class = "col">
				<?php
				//Global
				$x = 5;
				
				function f(){
					$x = 10;
					echo "Inside the function the value of x is $x <br>"; //Local
				}
				
				echo "Before running the function f(), the value of x: $x <br>";
				
				f();
				f();
				f();
				echo "<br>";
				
				echo "After running the function f(), the value of x: $x <br>";
				
				?>
				
			</div>
			
		
		<!-- Variables Scope: Global -->
			
			<div class = "col">
				<?php
				//Global
				$x = 5;
				
				function f2(){
					global $x;
					$x = 10;
					echo "Inside the function the value of x is $x <br>"; //Local
				}
				
				echo "Before running the function f2(), the value of x: $x <br>";
				
				f2();
				echo "<br>";
				
				echo "After running the function f2(), the value of x: $x <br>";
				
				?>
				
			</div>
			
			
		<!-- Variables Scope: Static -->
			
			<div class = "col">
				<?php
				//Global
				$x = 5;
				
				function f3(){
					static $x;
					$x += 1;
					echo "Inside the function the value of x is $x <br>"; //Local
				}
				
				echo "Before running the function f3(), the value of x: $x <br>";
				
				f3();
				f3();
				f3();
				
				echo "<br>";
				
				echo "After running the function f3(), the value of x: $x <br>";
				
				?>
				
			</div>
			
			
		<!-- Variables Scope: Static -->
			
			<div class = "col">
				<?php
				//Global
				$x = 5;
				
				function f4(){
					static $x;
					$x += 1;
					$GLOBALS['x'] = 100;
					echo "Inside the function the value of x is $x <br>"; //Local
				}
				
				echo "Before running the function f4(), the value of x: $x <br>";
				
				f4();
				f4();
				f4();
				
				echo "<br>";
				
				echo "After running the function f4(), the value of x: $x <br>";
				
				?>
				
			</div>
			
			
			
			
			
			
				
		</div>	
		
	<!-- Variable Datatypes -->
		
		<div class = "row">
			<div class = "col">
				<?php
					$x = 5;
					var_dump($x); //int(5)				
					echo "<br>";
			
					$x = "Alexander Onyegbula";
					var_dump($x); //string(19) "Alexander Onyegbula"				
					echo "<br>";
			
					$x = true;
					var_dump($x); //bool(true)				
					echo "<br>";
					
					$x = false;
					var_dump($x); //bool(true)				
					echo "<br>";
			
					$x = 5.123;
					var_dump($x); //float(3.14)			
					echo "<br>";
					
					$x = array(5,"Alexander Onyegbula", "Emily", "Isaac", true, false, 5.012);
					var_dump($x); 	
					echo "<br>";
			
			
				?>
			
			</div>
			
		
		
	<!-- Common String Function substr. -->
		
			<div class = "col">
				<?php
				$name = "Alexander Onyegbula";
				echo "Substring original value: $name <br>";
				
				echo "substr() example 1: ".substr($name, 10)."<br>";
				echo "substr() example 2: ".substr($name, 1)."<br>";
				echo "substr() example 3: ".substr($name, 7)."<br>";
				echo "substr() example 4: ".substr($name, -1)."<br>";
				echo "substr() example 5: ".substr($name, -10)."<br>";
				echo "substr() example 6: ".substr($name, -8)."<br>";
				echo "substr() example 7: ".substr($name, -4)."<br>";
				
				echo "substr() example 8: ".substr("Hello World", 10)."<br>";
		
		
		
				?>
			</div>
		
			<div class = "col">
				<?php
				$name = "Alexander Onyegbula";
				echo "Original Value of String: $name <br>";
			
				
				echo "strlen() example 1:".strlen($name)."<br>";
				echo "strlen() example 2:".strlen("Hello Welcome to my page")."<br>";
				echo "<hr>";
				
				//str_replace()
				echo "str_replace() example 1:".str_replace("Alexander", "Johnny", $name)."<br>";
				echo "str_replace() example 2:".str_replace("Hello", "Hello your majesty", "Hello Welcome to my page.")."<br>";
				echo "<hr>";
				
				//str_pos()
				$str_sent = "We are learning PHP in Database Technologies for Web Applications class at NYU SPS DBP MASY";
				echo "$str_sent <br><br>";

				echo "strpos() example 1:" . strpos($str_sent, "PHP") . "<br><br>";
				echo "<hr>";
				
				//strtolower()
				$str4 = "Database Technologies for Web Applications. PLEASE DO NOT FORGET TO SUBMIT YOUR SCREENSHOTS!";
				echo "$str4<br><br>";
				echo "strtolower () example 1:".strtolower($str4)."<br><br>";
				echo "<hr>";
				
				//strtoupper()
				$str4 = "Database Technologies for Web Applications. PLEASE DO NOT FORGET TO SUBMIT YOUR SCREENSHOTS!";
				echo "$str4<br><br>";
				echo "strtolower () example 1:".strtoupper($str4)."<br><br>";
				echo "<hr>";
				
				//is_string()
				echo "is_string() example 1: ".is_string($str4)."<br><br>";
				echo "is_string() example 1: ".is_string(43)."<br><br>";
				echo "is_string() example 1: ".is_string("43")."<br><br>";
				echo "<hr>";
				
				//strstr
				echo "strstr() example 1: ".strstr($str4, "Web", true)."<br><br>";
				echo "strstr() example 1: ".strstr($str4, "Web", false)."<br><br>";
				
				
				?>
				
								
			</div>
		
				
			
		</div>
		
		
		<div class = "col">
			<!-- Common Array Functions -->
            <div class="col">
                <?php
                // Common Array Functions
                $numbers = array(1, 2, 3, 4, 5);

                // count()
                echo "Number of elements in the array: " . count($numbers) . "<br>";

                // array_push()
                array_push($numbers, 6);
                echo "After pushing 6, the array: " . implode(", ", $numbers) . "<br>";

                // array_pop()
                $popped = array_pop($numbers);
                echo "Popped element from the array: " . $popped . "<br>";

                // array_shift()
                array_shift($numbers);
                echo "After shifting, the array: " . implode(", ", $numbers) . "<br>";

                // array_unshift()
                array_unshift($numbers, 0);
                echo "After unshifting 0, the array: " . implode(", ", $numbers) . "<br>";

                ?>
            </div>
			
			<!-- String Functions -->
            <div class="col">
                <?php
                // String Functions
                $str = "Hello, World!";

                // strtolower()
                echo "Lowercased string: " . strtolower($str) . "<br>";

                // strtoupper()
                echo "Uppercased string: " . strtoupper($str) . "<br>";

                // ucwords()
                echo "Uppercase the first character of each word: " . ucwords($str) . "<br>";

                // strrev()
                echo "Reversed string: " . strrev($str) . "<br>";

                // strlen()
                echo "Length of the string: " . strlen($str) . "<br>";
                ?>
            </div>
		</div>
		
		
	</main>
				
			


</body>


</html>
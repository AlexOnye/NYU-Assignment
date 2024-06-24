<?php
//Start Session Variables
session_start();

//Store DB Credentials
$dbusername = 'MASY_ATO4601';
$dbpassword = 'MASY_ATO4601';

//MASY_NETID | MASY_NETID
$conn = oci_connect($dbusername, $dbpassword, "localhost/app12cXDB", "AL32UTF8");

//ERROR HANDLING
if (!$conn){
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if (isset($_POST['createtable'])){
	$tablequery = "create table registered_users (name varchar2(32), email varchar2(64), password varchar2(255), constraint pk_registeredusers1 primary key (email))";
	
	$stid = oci_parse($conn, $tablequery);
	echo "Creating User Table<br/>";
	$admin_message = "Registered User Table CREATED SUCCESSFULLY!";
	$_SESSION['admin_message'] = $admin_message;
	
}elseif (isset($_POST['droptable'])){
	$tablequery = "drop table registered_users cascade constraints";
	
	$stid = oci_parse($conn, $tablequery);
	echo "Dropping User Table<br/>";
	$admin_message = "Registered User Table DROPPED SUCCESSFULLY!";
	$_SESSION['admin_message'] = $admin_message;
	
}elseif (isset($_POST['registeruser']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
	echo "Registering User to User Table <br><br>";
	
	$tmp_name = $_POST['name'];
	$tmp_email = $_POST['email'];
	$tmp_password = sha1($_POST['password']);
	
	$dbquery = "insert into registered_users values('$tmp_name', '$tmp_email', '$tmp_password')";
	echo $dbquery;
	
	$stid = oci_parse($conn, $dbquery);
	$registeredusermessage = "Registered User Inserted into Table SUCCESSFULLY!";
	$_SESSION['registereduser_message'] = $registeredusermessage;
	
}elseif (isset($_POST['loginvalidate']) && !empty($_POST['registeredemail']) && !empty($_POST['registeredpassword'])){
	echo "Validating Login Against User Table <br><br>";
	
	$tmp_email = $_POST['registeredemail'];
	$tmp_password = sha1($_POST['registeredpassword']);
	
	$dbquery = "SELECT * FROM registered_users WHERE email = '$tmp_email' and password = '$tmp_password'";
	echo $dbquery;
	
	$stid = oci_parse($conn, $dbquery);
	
	oci_execute($stid);
	oci_fetch($stid);
	
	if(oci_num_rows($stid) > 0){
		$_SESSION['$loginvalidationmessage'] = "Login Validation SUCCESSFUL!";
		header("refresh:5 url = Protected_Spring2024.php");
		exit();
	
	}else{
		$_SESSION['$loginvalidationmessage'] = "Login Validation FAILED, NOT FOUND!";
		header("refresh:5 url = Protected_Spring2024.php");
		exit();
	}
	
	
}else{
	$_SESSION['registereduser_message'] = "Registeration Fields are empty or invalid. Try again.";
}

//Execute the Query
echo "Executing SQL query";
oci_execute($stid);

header("refresh:5 url = Protected_Spring2024.php");
exit();

?>
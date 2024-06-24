<?php
session_start();

$username = "";
$password = "";

if (isset($_REQUEST['submit'])){
    $username = (isset($_REQUEST['username']) ? $_REQUEST['username'] : '');
    $password = (isset($_REQUEST['password']) ? $_REQUEST['password'] : '');
    
    if ($username == "ato4601@nyu.edu" && $password == "spsspring2024"){
        $_SESSION['islogged'] = true;
        $_SESSION['username'] = $username;
        header('Location: lecture7_Alexander_Onyegbula_Protected_Spring2024.php');
        exit();
    
    } else {
        $_SESSION['islogged'] = false;
        $_SESSION['login_failed'] = true;
        header('Location: lecture7_Alexander_Onyegbula_Login_Spring2024.php');
        exit();
    }
}
?>
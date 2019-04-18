<?php  //Start the Session
session_start();
require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
    $result = mysql_query($query) or die(mysql_error());
    $count = mysql_num_rows($result);

    if ($count == 1){
        $_SESSION['username'] = $username;
    }

    else{
        echo "Invalid Login Credentials.";
    }
}
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Hello " . $username;
    echo "This is the Members Area";

?>

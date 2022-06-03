<?php
session_start();
require 'connect.php';
// get username
isset($_POST['username']) ? $username = $_POST['username'] : $username = '';
isset($_POST['password']) ? $password = $_POST['password'] : $password = '';
$password = md5($password);


$stmt = $pdo->query("select * from login where username = '$username' and password = '$password'");
$row = $stmt->fetch();
if ($row) {
    $_SESSION['username'] = $username;
    echo "Login success";
    header("Location: php10D.php");

}
else {
    echo "Login failed";
    header("Location: php10A.php");
}
?>
<?php
$db_hostname = "localhost";
$db_database = "praktikum9"; // Write your own db name here
$db_username = "root"; // Write your own username here
$db_password = ""; // Write your own password here
$db_charset = "utf8mb4"; // Optional
$dsn = "mysql:host=$db_hostname;dbname=$db_database;charset=$db_charset";
$opt = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false
);
try {
$pdo = new PDO($dsn,$db_username,$db_password,$opt);
// stmt query select where
// post keyword
// isstet post keyword
// if (isset($_POST['keyword'])) {
    // $keyword = "";
    // $keyword = "D";
    // echo $keyword;
    // keyword post
    $keyword = $_GET['keyword'];
    $sql = "SELECT * FROM meetings WHERE name LIKE '%$keyword%'";
    $stmt = $pdo->query($sql);
// }
// $nama = $_POST['keyword'];
// $stmt = $pdo->query("select * from meetings where slot = '$nama'");
//Code 6
// lookup all hints if query result is not empty
if ($stmt) {
echo json_encode($stmt->fetchAll());
}
// Output "no suggestion" if no hint was found or output correct values
else{
echo "no suggestion";
}
$pdo = NULL;
}
catch (PDOException $e) {
exit("PDO Error: ".$e->getMessage()."<br>");
}
?>
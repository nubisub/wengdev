<?php
// TODO cek dulu ada data gak

$db_hostname = "localhost"; // Write your own db server here
$db_database = "praktikum9"; // Write your own db name here
$db_username = "root"; // Write your own username here
$db_password = ""; // Write your own password here
// For the best practice, don’t

$db_charset = "utf8mb4"; // Optional
$dsn =
"mysql:host=$db_hostname;dbname=$db_database;charset=$db_charset";
$opt = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false
);
try {
$pdo = new PDO($dsn,$db_username,$db_password,$opt);
parse_str(file_get_contents("php://input"),$_DELETE);
$slot = $_DELETE['slot'];
// $sql = "INSERT INTO `meetings` (`slot`, `name`, `email`) VALUES
// ('$slot', ' $name', '$email')";
// UPDATE
// $sql = "UPDATE `meetings` SET `name` = '$name', `email` = '$email' WHERE `meetings`.`slot` = '$slot'";
// delete
$sql = "DELETE FROM `meetings` WHERE `meetings`.`slot` = '$slot'";
$stmt = $pdo->query($sql);
$jumlah = $stmt->rowCount();

if ($stmt  && $jumlah > 0){
$msg = "Data berhasil dihapus.";
} else{
$msg = "Gagal.";
}
$response = array(
'status'=>'201 Created',
'message' => $msg
);
echo json_encode($response);
$pdo = NULL;
}
catch (PDOException $e) {
exit("PDO Error: ".$e->getMessage()."<br>");
}
?>
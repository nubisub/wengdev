<?php
    // session
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: php10A.php");
}
?>
<!DOCTYPE html>
<html lang='en-GB'>

    <head>
        <title>PHP09 D</title>
    </head>
    <style>
    table,
    th,
    tr,
    td {
        border: solid 1px;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 5px 20px;
        text-align: center;
    }
    </style>

    <body>
        <?php include('php10D_header.php'); ?>
        <h1>PHP and Databases</h1><?php
        require ("connect.php");
       
try {
$pdo = new PDO($dsn,$db_username,$db_password,$opt);


//INSERt
// echo $_REQUEST['slot'];
// echo $_REQUEST['name'];
// echo $_REQUEST['email'];
// try {
//     //code...
// } catch (\Throwable $th) {
//     //throw $th;
// }
try {
    if (isset($_REQUEST['slot']) && isset($_REQUEST['name']) && isset($_REQUEST['email'])) {
        $slot = $_REQUEST['slot'];
        if(is_int($slot)){
            throw new Exception("Slot harus berupa angka");
        }
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $sql = "INSERT INTO meetings (slot, name, email) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$slot, $name, $email]);
    }
    else {
        // echo "Tidak ada data yang dikirim";
    }
} catch (\Throwable $th) {
    // print error
    echo $th->getMessage();
}





// while loop

echo "<h2>Data in meeting table (While loop)</h2>\n";
$stmt = $pdo->query("select * from meetings ORDER BY slot DESC");
echo "Rows retrieved: ".$stmt->rowcount()."<br><br>\n";
echo "<table>\n";
echo "<tr><th>Slot</th><th>Name</th><th>Email</th></tr>\n";
while ($row = $stmt->fetch()) {
    echo "<tr><td>".$row['slot']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td><a href='php09F.php?slot=",$row["slot"],"&name=",$row["name"],
"&email=",$row["email"],"'>ubah</a> </td> <td><a href='delete.php?slot=",$row["slot"],"'>delete</a></td></tr>\n";
    

    
// echo "Slot: ",$row["slot"], "<br>\n";
// echo "Name: ",$row["name"], "<br>\n";
// echo "Email: ",$row["email"],"<br><br>\n";
}
echo "</table>\n";



echo "<h2>Data in meeting table (Foreach loop)</h2>\n";
$stmt = $pdo->query("select * from meetings ORDER BY slot");
echo "<table>";
echo "<tr><th>Slot</th><th>Name</th><th>Email</th></tr>\n";

foreach($stmt as $row) {
    echo "<tr><td>".$row['slot']."</td><td>".$row['name']."</td><td>".$row['email']."</td></tr>\n";

// echo "Slot: ",$row["slot"], "<br>\n";
// echo "Name: ",$row["name"], "<br>\n";
// echo "Email: ",$row["email"],"<br><br>\n";
}
echo "</table>";
$pdo = NULL;
}
catch (PDOException $e) {
exit("PDO Error: ".$e->getMessage()."<br>");
}
?>
    </body>

</html>

</html>
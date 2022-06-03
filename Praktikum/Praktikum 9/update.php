<?php
require ("connect.php");
    try {
    if (isset($_REQUEST['name']) && isset($_REQUEST['email'])) {
        $slot = $_REQUEST['slot'];
        echo $slot;

        if(is_int($slot)){
            throw new Exception("Slot harus berupa angka");
        }
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $sql = "UPDATE meetings SET name = ?, email = ?, slot = ? WHERE slot = $slot;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $slot]);
    }
    else {
        echo "Tidak ada data yang dikirim";
    }
} catch (\Throwable $th) {
    echo $th->getMessage();
}
    header("Location: php09D.php");
?>
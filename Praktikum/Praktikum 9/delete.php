<?php
        require ("connect.php");
        $id = $_GET["slot"];


        // DELETE FROM table_name WHERE condition;

        try {

        $sql = "DELETE FROM meetings WHERE slot = $id;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
 catch (\Throwable $th) {
    echo $th->getMessage();
}
        header("Location: php09D.php");
?>
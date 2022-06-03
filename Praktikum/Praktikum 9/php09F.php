<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
            require ("connect.php");
                $id = $_GET["slot"];
        $stmt = $pdo->query("select * from meetings WHERE slot=$id");
        $data = $stmt->fetch();
                
                ?>
        <h1>Form Menambahkan Data Meeting</h1>
        <form action="update.php" method="post">
            <div>
                <label for="slot">Slot : <?php echo $data['slot'] ?></label>
                <input id="slot" type="hidden" name="slot" value="<?php echo $data['slot']?>">
            </div>

            <div>
                <label for="name">Name :</label>
                <input id="name" type="text" name="name" value="<?php echo $data['name']?>">
            </div>

            <div>
                <label for="email">Email :</label>
                <input id="email" type="email" name="email" value="<?php echo $data['email']?>">
            </div>

            <div>
                <input type="submit" value="Tambah">
            </div>
        </form>


    </body>

</html>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
    div {
        /* display: flex;
        justify-content: right; */
    }

    div label {
        display: inline-block;
        width: 50px;
        /* make right */
        /* text-align: left; */
    }

    input {
        margin: 5px 0;

    }
    </style>

    <body>
        <h1>Form Menambahkan Data Meeting</h1>
        <form action="php09D.php" method="post">
            <div>
                <label for="slot">Slot :</label>
                <input id="slot" type="text" name="slot">
            </div>

            <div>
                <label for="name">Name :</label>
                <input id="name" type="text" name="name">
            </div>

            <div>
                <label for="email">Email :</label>
                <input id="email" type="text" name="email">
            </div>

            <div>
                <input type="submit" value="Tambah">
            </div>
        </form>
    </body>

</html>
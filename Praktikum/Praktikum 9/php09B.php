<!DOCTYPE html>
<html lang='en-GB'>

    <head>
        <title>PHP09 B</title>
    </head>

    <body>
        <?php
            echo 'Item: ', $_REQUEST['item'], "<br>";
            echo ' <form action="php09C.php" method="post"> 
                <label>Address: 
                <input type="text" name="address" ></label>
                <input type="hidden" name="item" value="',$_REQUEST['item'],'">
                </form>';
        ?>
    </body>

</html>
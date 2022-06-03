<!DOCTYPE html>
<html lang="en-GB">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP 11B</title>
    </head>

    <body>
        <h1>Hello World</h1>
        <?php
error_reporting( E_ALL );
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
echo "<h2>Types and Type Casting</h2>\n";
$mode = rand(1,4);
echo "<p>Mode: $mode</p>\n";
if ($mode == 1)
$randvar = rand();
elseif ($mode == 2)
$randvar = (string) rand();
elseif ($mode == 3)
$randvar = rand()/(rand()+1);
else
$randvar = (bool) $mode;
echo "Random scalar: $randvar<br>\n"; 
    try {
        if(is_int($randvar)){
            
            echo "Random scalar is an integer.<br>\n";
            return;
        }
        if(is_float($randvar)){
                echo "Random scalar is a float.<br>\n";
            return;}

        if(is_string($randvar)){
                echo "Random scalar is a string.<br>\n";
            return;}
        
                throw new Exception("I don't know what this is");
    } catch (\Throwable $th) {
        echo $th->getMessage();
        //throw $th;
    }
?>


    </body>

</html>
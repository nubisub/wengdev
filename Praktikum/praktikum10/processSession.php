<?php
session_start ();
// not necessary but convenient
if (isset($_REQUEST['address']))
$_SESSION['address'] = $_REQUEST['address'];
// $_SESSION['user_start'] = time();

?>
<!DOCTYPE html>
<html lang='en-GB'>

    <head>
        <title>Processing</title>
    </head>

    <body>
        <?php
        // echo "Address: " . $_SESSION['address'] . "<br>";

if (isset($_SESSION['user_start']) && time() - $_SESSION['user_start'] > 5) { 
    session_unset();
    session_destroy();
    echo "Session expired";
}

    if(isset($_SESSION['name'])) {
        echo "Item: " . $_SESSION['name'] . "<br>";
    }
    if(isset($_SESSION['address'])) {
        echo "Address: " . $_SESSION['address'] . "<br>";
    }
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 5; URL=$url1");

    
?>
    </body>

</html>
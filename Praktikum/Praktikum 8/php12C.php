<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP 12C</title>
    </head>
    <style>
    table,
    tr,
    td {
        border: 1px solid;
        border-collapse: collapse;
        text-align: center;
        ;
    }

    td {
        padding: 10px 50px;
    }
    </style>

    <body>
        <h1>Associative Arrays</h1>
        <?php
$dict1 = array('a' => 1, 'b' => 2);
$dict2 = $dict1;
$dict1['b'] = 4;
echo "\$dict1['b'] = ", $dict1['b'],"<br>\n";
echo "\$dict2['b'] = ", $dict2['b'],"<br>\n";
echo "<br>\n";

foreach ($dict1 as $key => $value) {
    echo "$key => $value<br>\n";
}

$text = 'lorem ipsum elit congue auctor inceptos taciti suscipit tortor auctor integer congue hac nullam hac auctor tellus nullam inceptos nullam integer tellus nullam auctor elit lorem ipsum elit';

// jadiin array
$dict3 = explode(' ', $text);
echo "<br>\n";
// hitung kemunculan kata
$r = array_count_values($dict3);
// view
    foreach ($r as $key => $value) {
        echo "$key => $value<br>\n";
    }

    echo "<br>\n";
    echo "<br>\n";
    // sort function
    arsort($r);
    // make tabel
    echo "<table>";
    echo "<tr><td>Kata</td><td>Jumlah Kemunculan</td></tr>";



    foreach ($r as $key => $value) {
        // make table
        echo "<tr><td>$key</td><td>$value</td></tr>";
        // echo "$key => $value<br>\n";
    }
    echo "</table>";
?>
    </body>

</html>
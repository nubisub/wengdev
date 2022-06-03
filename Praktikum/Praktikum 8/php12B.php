<!DOCTYPE html>
<html>

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP 12B</title>
    </head>

    <body>
        <h1>Array Operators and Regular Expressions</h1>
        <?php
echo "<h2>Exercise 2a</h2>\n";
$planets = array("earth");
array_unshift($planets,"mercury","venus");
array_push($planets,"mars","jupiter","saturn");
echo "(1) \$planets = [",join(", ",$planets),"]<br>\n";

$last = array_pop($planets);
echo "(2) \$planets = [",join(", ",$planets),"]<br>\n";

$first = array_shift($planets);
echo "(3) \$planets = [",join(", ",$planets),"]<br>\n";

echo "(4) \$first = $first, \$last = $last<br>\n";

echo "<h2>Exercise 2c</h2>\n";
$spheres = $planets;
echo "(5) \$spheres = [",join(", ",$spheres),"]<br>\n";

$planets[1] = "midgard";
echo "(6) \$planets = [",join(", ",$planets),"]<br>\n";
echo "(6) \$spheres = [",join(", ",$spheres),"]<br>\n";

$spheres = &$planets;
echo "(7) \$spheres = [",join(", ",$spheres),"]<br>\n";

$planets[0] = "friga";
echo "(8) \$planets = [",join(", ",$planets),"]<br>\n";
echo "(8) \$spheres = [",join(", ",$spheres),"]<br>\n";

echo "<br>\n";
foreach ($planets as $key => $value) {
    // ambil 1st element + delete
    $zeroarr = array_shift($planets);
    echo "Removed : ", $zeroarr, "";
    echo " Remaining : [", join(", ",$planets), "]<br>\n";
}

echo "<h2>Exercise 3</h2>\n";
$names = ["Dave Shield", "Mr Andy Roxburgh",
"Dr George Christodoulou", "Dr Ullrich Hustadt",
"Dr David Jackson"];
foreach ($names as $name)
echo "(1) Name: $name<br>\n";
// Your own code here
foreach ($names as $name) {
    // replace gelar
    $name = str_replace("Dr ","",$name);
    $name = str_replace("Mr ","",$name);
    
    // buat explode (string jadi array)
    $arrname = explode(" ",$name);
    // ambil first and uppercase
    $first = array_pop($arrname);
    $first = strtoupper($first);
    // join lagi
    $name2 = $first . ", " . join(" ",$arrname);
    echo "(2) Name: $name2 <br>\n";
}
?>
    </body>

</html>
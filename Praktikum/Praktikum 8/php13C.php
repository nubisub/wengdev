<!DOCTYPE html>
<html lang='en-GB'>

    <head>
        <title>PHP 13C</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <META name="description" content="php13C.php">
    </head>

    <body>
        <h1>Variable-length Argument Lists</h1>
        <?php
        
function reduceOp(){
    $sumarguments = func_num_args();
    $arguments = func_get_args();
    $ascarr = array_pop($arguments);

    // jika arg terakhir bukan array
    if(!is_array($ascarr)){ 
        throw new Exception("TypeError : Last argument must be an array");
        return;
    }
    $operator = $ascarr['op'];
    $keyvalue = array_keys($ascarr);
    // jika arg terakhir key nya bukan op
    if($keyvalue[0] != 'op'){
        throw new Exception("TypeError : Last argument must be an array with key 'op'");
    }
    // jika arg terakhir value nya bukan +,-,*,/
    if($operator != '+' && $operator != '-' && $operator != '*'){
        throw new Exception("ValueError : Operator must be +, -, *");
        return;
    }
    // jika arg kurang
    if(count($arguments) < 1){
            return "NULL";
        }
        
    $hasil = $arguments[0];

    for ($i=0; $i < $sumarguments-1; $i++) { 
        // jika terdapat arg yang bukan numeric
        if(!is_numeric($arguments[$i])){
            return;
        }
        if($i == 0){
            continue;
        }
        if($operator == "+"){
            $hasil += $arguments[$i];
        }
        else if($operator == "-"){
            $hasil -= $arguments[$i];
        }
        else if($operator == "*"){
            $hasil *= $arguments[$i];
        }
        
    }
    return $hasil;
}


try {
    echo "1: ", reduceOp(2,3), "<br>\n"; # throws an exception
}
catch (Exception $e) {
    echo "Exception ",$e->getMessage(),"<br>\n"; # ’TypeError’
}

try {
    echo "2: ",reduceOp(2,3,array('op' => '/')), # throws an exception
    "<br>\n";
}
catch (Exception $e) {
    echo "Exception ",$e->getMessage(),"<br>\n"; # 'ValueError'
}

echo "3: ",reduceOp(array('op'=>'+')), # should return NULL
"<br>\n";
echo "4: ",reduceOp(2,array('op' => '*')), # should return 2
"<br>\n";
echo "5: ",reduceOp(2,3,5,array('op' => '+')), # should return 10
"<br>\n";
echo "6: ",reduceOp(2,3,5,7,array('op' => '*')), # should return 210
"<br>\n";
echo "7: ",reduceOp(2,3,5,7,11,array('op' => '-')),# should return - 24
"<br>\n";
?>

    </body>

</html>
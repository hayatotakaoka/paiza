<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);

if($input[0] <$input[1]){
    echo $input[1];
}elseif($input[0] > $input[1]){
    echo $input[0];
}elseif($input[0] == $input[1]){
    echo"eq";
}
?>

<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    if($input[0]>$input[1] * $input[2]){
        echo"NG";
    }else{
        echo"OK";
    }
?>

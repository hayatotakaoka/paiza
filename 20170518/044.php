<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    if($input[1] == "F"){
        $input[1] = Ms;
    }else{
        $input[1] = Mr;
    }
    echo"Hi, ".$input[1].". ".$input[0];
?>

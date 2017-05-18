<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    if($input[0] == $input[1]){
        if($input[1] == "J"){
            $input[1] ="Q";
        }
    }

    echo $input[0]." ".$input[1];
?>

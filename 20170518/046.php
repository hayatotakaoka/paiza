<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);

    if($input[0]< $input[1]){
        if($input[2] < $input[1]){
            echo $input[1];
        }else{
            echo $input[2];
        }
    }elseif($input[0] < $input[2]){
        echo $input[2];
        }else{
            echo $input[0];
        }

?>

<?php

    $input_lines = trim(fgets(STDIN));
    $i = strlen($input_lines);
    for($j = 0;$j<$i;$j++){
        if($input_lines[$j] == "n"){
            if($input_lines[$j+1] == "o"){
                if($input_lines[$j+2] == "a"){
                    if($input_lines[$j+3] == "k"){
                        if($input_lines[$j+4] == "i"){
                            break;

                        }
                    }
                }
            }
        }
        echo $input_lines[$j];
    }
?>

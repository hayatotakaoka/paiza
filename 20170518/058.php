<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    for($i=0;$i<3;$i++){
        for($j=0;$input[$i]>$j;$j++){
            if($i==0 || $i==2){
                echo"A";
            }else{
                echo"B";
            }
        }
    }
    ?>

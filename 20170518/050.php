<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);

    if($input[0]>5){
        $input[0] = 5;
        }

    if($input[1]>5){
        $input[1] =5;
    }
    
    echo $input[0] + $input[1];

    ?>

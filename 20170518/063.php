<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    $input_lines = trim(fgets(STDIN));
    $i=$input_lines;
    $j=0;
    while($j<5){
        if($input[$j]>$i){
            $j++;
            echo $j;
            break;
        }
            $j++;
    }


?>

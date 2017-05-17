<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i= $input_lines;
    $input_lines = trim(fgets(STDIN));
    $j = $input_lines;
    $k = 0;
    while($i<$j){
        $j -= $i;
        $k++;
    }
    $k++;

    echo $k;
?>

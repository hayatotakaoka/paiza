<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $i = 1;
    $j = 0;

    while($i <=$input_lines){
        $j += $i;

        $i++;
    }


    echo $j;
?>

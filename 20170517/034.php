<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));

    $i = 21;
    while($i >= $input_lines){
        $i = $i - $input_lines;

    }
    if($i == 0){
        echo $input_lines;
    }else{
        echo $i;
    }
?>

<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));

    $i = $input_lines;
    $input_lines = fgets(STDIN);
    $j = $input_lines;
    $k =0;
    while($j > $k){
        echo $i[$k];
        $k ++;

    }

?>

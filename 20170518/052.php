<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $j=0;
    for($i=1;$i<=$input_lines;$i++){
        $j = $i + $j;
    }
    echo $j;
?>

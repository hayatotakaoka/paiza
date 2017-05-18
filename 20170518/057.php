<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = $input_lines -1;
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);

    echo $input[$i];


?>

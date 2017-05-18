<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    $input_lines = trim(fgets(STDIN));
    $input2 = explode(" ",$input_lines);

    echo $input[0]*$input2[1] - $input[1]*$input2[0];
    ?>

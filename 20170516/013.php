<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    //echo "$input[0]\n";
    //echo "$input[1]";
    //$i = $input[0];

    for($i=0;$input[0] >= $input[1];$i++){
        $input[0] = $input[0] - $input[1];
    }
    echo "$i $input[0]";
    ?>

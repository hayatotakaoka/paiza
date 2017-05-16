<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for($i = 0; $i<26;$i++){
        if($input_lines == $alpha[$i]){
            $i ++;

            break;

        }
    }
    echo "$i";

?>

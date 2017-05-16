<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    //echo strlen($input_lines);

    $alpha = "abcdefghijklmnopqrstuvwxyz";
    $alphab ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for($j=0;  $j <= strlen($input_lines);$j++){
        for($i = 0; $i < 26; $i++){
            if($alpha[$i] == $input_lines[$j]){
                echo $alphab[$i];
                $i++;
                break;
            }
        }
    }


?>

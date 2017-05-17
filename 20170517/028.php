<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);

    if($input_lines <10){
        echo "1";
        }
        elseif($input_lines <100){
        echo "2";
        }
        elseif($input_lines <1000){
        echo "3";
        }
        elseif($input_lines <10000){
        echo "4";
        }
        else{
            echo "5";
        }
?>

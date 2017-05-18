<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $j =0;
    for($i=0;$i<7;$i++){
        if($input_lines >=30){
            $j++;
        }
        $input_lines = trim(fgets(STDIN));
    }
    echo $j;
?>

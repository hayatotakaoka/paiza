<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));

    while($input_lines >0){
        echo"$input_lines";
        $input_lines -= 1;
        if($input_lines >0){
            echo"\n";
        }
    }
?>

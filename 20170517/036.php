<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $k = strlen($input_lines);
    //echo $k;
    for($j=0;$k>$j;$j++){
        if($input_lines[$i] == "a"){
            if($input_lines[$i+1] == "t"){
                echo"@";
                $i ++;
            }else{
                echo $input_lines[$i];
            }
        }else{
            echo $input_lines[$i];
        }
        $i++;
    }
?>

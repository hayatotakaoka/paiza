<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines =  trim(fgets(STDIN));
    $input_lines2 = trim(fgets(STDIN));
    $input_lines3 = trim(fgets(STDIN));

    if($input_lines == $input_lines2 && $input_lines == $input_lines3){
        echo"YES";
    }else{
        echo"NO";
    }

?>

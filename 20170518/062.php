<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    $j =0;
    $k =0;
    $alpha = "ABCDEFGHIJ";
    for($i=0;$i<3;$i++){
        while($input[$i]>$j){
            echo $alpha[$k];
            $j++;
            $k++;
        }
        echo "\n";
        $j =0;//初期化
    }

?>

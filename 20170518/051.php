<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);
    $j =0;
    for($i=0;$i<=10;$i++){
        if($input[$i]=="W"){
          $j++;
        }
    }

    if($j>=5){
        echo"OK";
    }else{
        echo "NG";
    }
?>

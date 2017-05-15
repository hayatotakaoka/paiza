<?php

    $input_lines = fgets(STDIN);

for($i=1; $i<10;$i++){

    $j = $input_lines;
    $j = $i * $j;
    echo("$j");
    if($i<9){
        echo" ";
    }
}

?>

<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);


    echo $input[0]."/".$input[1]."/".$input[2];
?>

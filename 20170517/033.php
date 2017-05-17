<?php
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ",$input_lines);

    $i= $input[0];
    $j = $input[1];
    echo $i[0].".".$j[0];

?>

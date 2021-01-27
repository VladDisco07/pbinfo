<?php
    //100 de puncte
    
    fscanf(STDIN, "%d %d", $a, $b);

    $n = ($b / $a);

    if ($b % $a != 0)
    {
        $n = $n + 1;
    }

    print floor($n);
?>

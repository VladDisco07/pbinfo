<?php
    //100 de puncte

    fscanf(STDIN, "%d %c", $n, $c);

    for ($i = 1; $i <= $n; $i = $i + 1)
    {
        for ($j = 1; $j <= $i; $j = $j + 1)
        {
            print $c;
        }

        print "\n";
    }


?>

<?php
    //100 de puncte
    
    fscanf(STDIN, "%d", $n);

    if ($n % 2 == 0)
    {
        print $n;
        print " este par ";
    } else {
        print $n;
        print " este impar";
    }

?>

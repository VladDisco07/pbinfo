<?php
    //100 de puncte
    
    fscanf(STDIN, "%d", $n);

    $f1 = 1;
    $f2 = 1;

    print 1;
    print " ";
    print 1;
    print " ";

    $f3 = $f1 + $f2;

    while ($f3 <= $n)
    {
        print $f3;
        print " ";

        $f1 = $f2;
        $f2 = $f3;
        $f3 = $f1 + $f2;
    }
?>

<?php
    //80 de puncte

    fscanf(STDIN, "%d %d", $n, $k);
    $copie1 = $n;
    $copie2 = $n;
    $contor = 0;
    $contor2 = 0;

    while ($n != 0)
    {
        $contor = $contor + 1;
        $n = floor($n / 10);
    }

    while ($copie1 != 0)
    {
        if (floor($copie1) % 10 < $k)
        {
            $contor2 = $contor2 + 1;
        }

        $copie1 = floor($copie1 / 10);
    }

   if ($contor == $contor2)
    {
        print ("DA");
    } else {
        print ("NU");
    }
?>

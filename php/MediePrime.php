<?php
    //solutia nu a fost incarcata pe pbinfo inca
    
    $suma = 0;
    $contor_medie = 0;
    
    fscanf(STDIN, "%d", $n);

    for ($contor = 1; $contor <= $n; $contor = $contor + 1)
    {
        fscanf(STDIN, "%d", $v);
        $ver = TRUE;

        for ($j = 2; $j * $j <= $v; $j = $j + 1)
        {
            if ($v % $j == 0)
            {
                $ver = FALSE;
            }
        }

        if ($ver == TRUE)
        {
            $suma = $suma + $v;
            $contor_medie = $contor_medie + 1;
        }
    }

    print $suma / $contor_medie;


?>

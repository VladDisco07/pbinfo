<?php
    fscanf(STDIN, "%d %d", $a, $b);

    $adevarat = TRUE;

    while ($a != 0)
    {
        if ($a % 10 > $b)
        {
            $adevarat = FALSE;
            break;
        }

        $a = $a / 10;
    }

    if ($adevarat == TRUE)
    {
        print("DA");
    } else {
        print("NU");
    }
?>

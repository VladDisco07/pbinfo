<html>
    <body>
    <form action = "home.php" method = "get">
            <input type = "number" name= "numarunu">
            <input type = "number" name= "numardoi">
            <input type = "submit">
        </form>
        <br>
        <?php
            /*            
                Rezolvarea aceasta nu este una de 100 de puncte!!
                Recomand fscanf pentru a rezolva problema cu 100 de puncte
            */
            $lista_numere = array(0, 0);
            $nr1 = $_GET["numarunu"];
            $lista_numere[0] = $nr1;

            $nr2 = $_GET["numardoi"];
            $lista_numere[1] = $nr2;

            if (count($lista_numere) == 2)
            {
                echo $lista_numere[0] + $lista_numere[1];
            }
        ?>
    </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Array</title>
</head>
<body>
    <h1>Introduce la edad de los dos hermanos</h1>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $dato1 = $_POST["dato1"];
        $dato2 = $_POST["dato2"];

       

          function diferenciaEdad($dato1, $dato2) {
            if ($dato1 > $dato2) {
                $re1 = $dato1 - $dato2;
                return $re1;
                
          }
          else {
            $re2 = $dato2 - $dato1;
            return $re2;
          }

        }


        $resultado = diferenciaEdad($dato1, $dato2);
        echo " La diferencia de edad es $resultado";


    }
    ?>

    <form method="POST">
        <label for="dato1"> Hermano 1: </label>
        <input type="number" name="dato1" id="dato1" required>
        <br>

        <label for="dato2"> Hermano 2: </label>
        <input type="number" name="dato2" id="dato2" required>
        <p>

        <input type="submit" value="Calcular media">
  </form>

</body>
</html>
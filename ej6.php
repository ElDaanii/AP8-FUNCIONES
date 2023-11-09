<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h1>Introduce un caracter y un numero</h1>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $dato1 = $_POST["dato1"];
        $dato2 = $_POST["dato2"];

        function obtenerCaracteres($dato1, $dato2) {
            $arr = [];
            for ($i = 0; $i < $dato2; $i++) {
                    $val = $dato1[$i];
                    array_push($arr, $val);
                }
                return $arr;
            }
            foreach ($arr as $value) {
            
    }
    $res = obtenerCaracteres($dato1, $dato2);
    print_r($res);
}
}
    ?>

    <form method="POST">
        <label for="dato1"> Introduce un caracter </label>
        <input type="text" name="dato1" id="dato1" required>
        <br>

        <label for="dato2"> Introcude un numero </label>
        <input type="text" name="dato2" id="dato2" required>
        <p>

        <input type="submit" value="Calcular media">
  </form>

</body>
</html>
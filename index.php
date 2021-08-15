<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Calculadora PHP</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <h1 align="center" id="titulo">Calculadora Básica</h1>
  <div>
    <form action="index.php" method="post">
      <input type="number" name="n1" placeholder="Ingrese un numero">
      <select class="operadores" name="operadores">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="number" name="n2" placeholder="Ingrese un numero">
      <div>
        <input type="submit" value="Calcular">
        <?php
          if (isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["operadores"])):
            $numero1 = (int)$_POST["n1"];
            $numero2 = (int)$_POST["n2"];
            $operadores = $_POST["operadores"];
            $resultado = "";

            if ($operadores == "+"){
              $resultado = $numero1 + $numero2;
            }
            else if ($operadores == "-") {
              $resultado = $numero1 - $numero2;
            }
            else if ($operadores == "*") {
              $resultado = $numero1 * $numero2;
            }
            else{
              $resultado = $numero1 / $numero2;
            }
            echo "<h2>El Resultado es: $resultado</h2>";
        ?>
        <?php endif;?>
      </div>
    </form>
  </div>
  <footer style="text-align: center;" id="pie">
    <p><b>&copy; Developer Alan Alzogaray</b></p>
  </footer>
</body>
</html>

<?php

//converter.php

    include 'formulario.php';

      $numero = $_POST['numero'];
      $opciones = $_POST['opciones'];




  //Mililitros a Onzas Fluidas
  if ($opciones==1){
    $mililitros =  ($numero / 29.574);
    echo "<h2> Mililitros a Onzas Fluidas ".round($mililitros,2)." </h2>";

  }

  //Metros a Yardas
  if ($opciones==2){
    $metros =  ($numero * 1.0936);
    echo "<h2> Metros a Yardas ".round($metros,2)." </h2>";
  }

  //Gramos a Libras
  if ($opciones==3){
    $gramos =  ($numero / 454);
    echo "<h2> Gramos a Libras ".round($gramos,2)." </h2>";

  }

  //Celsius a Fahrenheit
  if ($opciones==4){
    $celsius = ($numero * 9/5) + 32;
    echo "<h2> Celsius a Fahrenheit ".round($celsius,2)." </h2>";

  }

  //Kilometros a Millas
  if ($opciones==4){
    $kilometros =  ($numero / 1.609);
    echo "<h2> Kilometros a Millas ".round($kilometros,2)." </h2>";
  }

  //Pesos a Libras Esterlinas
  if ($opciones==5){
    $pesos = ($numero / 26.13);
    echo "<h2> Pesos a Libras Esterlinas ".round($pesos,2)." </h2>";

  }

?>

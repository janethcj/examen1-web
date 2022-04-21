//converter.php

<?php

  include 'app.php';

  //Fahrenheit a Celsius
  if (opciones==1){
    $fah = ($numero - 32) * 5/9;
  }

  //Celsius a Fahrenheit
  if (opciones==2){

    $cel = ($numero * 9/5) + 32;
  }

  //Kilogramos a Libras
  if (opciones==3){

    $kilo = $numero * 2.2046;
  }

  //Libras a Kilogramos
  if (opciones==4){

    $lib = $numero / 2.2046;
  }

  //Litros a Galones
  if (opciones==5){

    $lit = $numero / 3.785;
  }

  //Galones a Litros
  if (opciones==6){

    $gal = $numero * 3.785;
  }

  //Centimentros a Pulgadas
  if (opciones==7){

    $cen = $numero / 2.54;
  }

  //Pulgadas a Centimentros
  if (opciones==8){

    $pul = $numero * 2.54;
  }


?>

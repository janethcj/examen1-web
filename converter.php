
<?php

//converter.php

  include 'converter.php';

  //Mililitros a Onzas Fluidas
  if (opciones==1){
    $mililitros =  ($numero / 29.574);
  }

  //Metros a Yardas
  if (opciones==2){
    $metros =  ($numero * 1.0936);
  }

  //Gramos a Libras
  if (opciones==3){
    $gramos =  ($numero / 454);
  }

  //Celsius a Fahrenheit
  if (opciones==4){
    $celsius = ($numero * 9/5) + 32;
  }

  //Kilometros a Millas
  if (opciones==4){
    $kilometros =  ($numero / 1.609);
  }

  //Pesos a Libras Esterlinas
  if (opciones==5){
    $pesos = ($numero / 26.13);
  }

?>

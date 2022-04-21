<!doctype html>
<!--index.php-->
<html lang="en">

<head>

  <title> Convertidor de unidades entre el sistema métrico decimal y el sistema inglés. </title>
  <meta charset="utf-8">

    <style>

      body {
          background-color: #e2d0c0;
      }

    .container{
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;

    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .col-md-18{
      position: relative;
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
    }

    form {
    display: block;
    margin-top: 0em;
  }

  .form-group {
    margin-bottom: 1rem;
  }

  .form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }

  .button {
    border: ;
    color: black;
    background-color: #F2E5D5;
    padding: 10px 30p;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 26px;
    margin: 4px 2px;
    cursor: pointer;
}

  main {
      text-align: center;
      text-decoration: wavy;
      border-top: 0.30cm;
      border-style: 1px solid #000000;
      font-size: 30px;
      font-family: themillion;
  }

  header {
      text-align: center;
      width: 80%;
      margin: 1.5cm;
      border: 2px solid #000000;
      padding: 3em;
      font-size: 0.60cm;
      font-family: themillion;
  }

  .img{
      background-image: url("https://weheartit.com/entry/350849687");
  }

  h2 {
    text-align: center;
    width: 80%;
    font-size: 0.60cm;
    font-family: themillion;
  }

  .text {
    text-align: center;
    display: flex;
    justify-content: center;
    font-size: 0.60cm;
    font-family: themillion;
    padding: 1rem;
  }

    </style>
</head>

<body>
    <!-- ========== HEADER ========== -->
    <div  style="background-color: #F2E5D5;">
    </div>

    <!-- ========== MENÚ ========== -->
    <div class="form-group col-sm-10" align="center">
    <a class="button" href="formulario.php"> Formulario</a>
    <a class="button" href="creditos.php"> Créditos</a>
    </div>
    <!-- ========== END MENÚ ========== -->

    <header  style="background-color: #F2E5D5;">
      <h1 class="img"> Convertidor de unidades entre el sistema métrico decimal y el sistema inglés. </h1>
    </header>
    <!-- ========== END HEADER ========== -->



    <!-- ============ MAIN ============ -->
    <div align="center">
      <h2>Sistema métrico decimal</h2>
      <div align="left"
      <p>
        El sistema métrico decimal​ es un sistema de medida que tiene por
        unidades básicas el metro y el kilogramo, en el cual los múltiplos
        o submúltiplos de las unidades de una misma naturaleza siguen una
        escala decimal. Este sistema, ampliado y reformado, ha dado lugar al
        Sistema Internacional de Unidades.
        <br>
        <br>
        El sistema métrico decimal lo utilizamos en la medida de las siguientes magnitudes:
        <ol>
          <li>LONGITUD: kilómetro, hectómetro, decámetro, metro, decímetro, centímetro, milímetro.</li>
        <li>MASA</li>
        <li>CAPACIDAD</li>
        <li>SUPERFICIE: km2,h2,d2,m2,dec2,cm2,ml2.</li>
        <li>VOLUMEN: km3,h3,d3,m3,dec3,cm3,ml3.</li>
        </ol>
      </p>
      </div>
    </div>

    <div align="center">
      <h2>Sistema inglés de medidas</h2>
      <div align="left"
      <p>
        El sistema inglés de medidas es un conjunto de unidades de medida diferentes
        a las del Sistema métrico decimal, que se utilizan actualmente como medida
        principal en los Estados Unidos, Reino Unido y algunos otros países
        vinculados.
        <br>
        <br>
        El sistema inglés de medidas lo utilizamos en la medida de las siguientes magnitudes:
        <ol>
          <li>LONGITUD: milla, yarda, pie, pulgada.</li>
          <li>PESO: libra, onza.</li>
          <li>VOLUMEN: galón, onzas fluidas.</li>
        </ol>
      </p>
      </div>
    </div>

</body>
<html>

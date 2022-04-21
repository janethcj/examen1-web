<!doctype html>
<!--formulario.php-->
<html lang="en">

<head>

  <title> Formulario </title>
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
  <a class="button" href="index.php"> Inicio</a>
  <a class="button" href="creditos.php"> Créditos</a>
  </div>
  <!-- ========== END MENÚ ========== -->
    <header  style="background-color: #F2E5D5;">
      <h1 class="img"> Formulario </h1>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ============ MAIN ============ -->
    <div align="center">
      <h2>Selecciona una unidad de conversión</h2>
    </div>

    <section>
            <!--FORMULARIO-->
            <form role="form" action="converter.php" method="POST">
            <div>
              <select name="opciones"class="form-control" text-align="center">
              <option selected>Selecciona una opción...</option>
                <option value="1">Mililitros a Onzas Fluidas</option>
                <option value="2">Metros a Yardas</option>
                <option value="3">Gramos a Libras</option>
                <option value="4">Celsius a Fahrenheit</option>
                <option value="5">Kilometros a Millas</option>
                <option value="6">Pesos a Libras Esterlinas</option>
              </select>
            </div>

            <div>
            <label class="text">Ingrese un número </label>
            <div>
            <input id="numero" name="numero" type="number" class="form-control" >
            </div>
            </div><!-- nombre -->


            <div class="form-group col-sm-10" align="center">
            <button class="button" id="converterphp" type="submit" name="converter" value="converter" onclick="converter.php">Convertir</button>
            </div><!-- enviar datos del formulario -->

            </form><!--FIN FORMULARIO-->
    </section><!--section-->


</body>
<html>

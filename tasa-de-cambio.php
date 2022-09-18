<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/css/tasa-de-cambio.css">
  <title>Document</title>
</head>

<body>
  <div class="background">
    <div class="overBackground">
      <p id="title">TASA DE CAMBIO</p>
      <div class="inputs">
        <h4>DIVISA</h4>
        <select name="" id="">
          <!-- <option value="" disabled>Seleccionar divisa</option> -->
          <option value="">Dólar</option>
          <option value="">Euro</option>
        </select>
        <h4>MONTO</h4>
        <input type="text">
        <h4>TIPO DE CAMBIO REFERENCIAL</h4>
        <input type="text">
      </div>
      <button class="proceed" type="submit">PROCEDER</button>
      <p id="result">Resultado</p>
      <div class="result">
        <span class="showedResult"></span>
      </div>
    </div>
  </div>

</body>

</html>
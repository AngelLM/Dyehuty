<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dyehuty</title>
  <style type="text/css">
  a {
    color:#679CCA;
  }
  </style>
</head>
<body>

<h1>Dyehuty</h1>

<form name="formulario" id="formulario" action="" method="POST">

<datalist id="lista">
        <option value="azul">
        <option value="rojo">
        <option value="amarillo">
        <option value="negro">
        <option value="verde">
    </datalist>

<div id="sections">
  <div class="section">
    <fieldset>
        <p>
            <label for="firstName">Palabra:</label>
            <input name="firstNam" list="lista" id="firstName" value=""/>
        </p>
    </fieldset>
  </div>
</div>
<input type="submit" class='addsection' value="Añadir">
<input type="submit" class='remove' value="Eliminar">
<input type="submit" class='generate' value="Generar imágenes">

</form>

<div id="images">
  <div class="image">
    <img id="imagen" src="" alt="">
  </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>

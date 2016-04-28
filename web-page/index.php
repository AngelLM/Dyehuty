<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dyehuty</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<!-- Fork me on Github Ribbon -->
<a href="https://github.com/AngelLM/Dyehuty"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
<!-- Fork me on Github Ribbon -->

<div class="wrapper">
<p id = "titulo"><a href="index.php">Dyehuty</a></p>
<p id = "subtitulo">La solución OpenSource para aprender LSE</p>
<p id = "npalabras">Número de palabras</p>

<form name="formulario" id="formulario" action="" method="POST">

<datalist id="lista"></datalist>

<script type="text/javascript">
  var array=<?php echo json_encode(file('list.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));?>;

  var options = '';

  for(var i = 0; i < array.length; i++)
    options += '<option value="'+array[i]+'"/>';

  document.getElementById('lista').innerHTML = options;
</script>

  <div id="izq">
  <fieldset>
    <div id="sections">
      <div class="section">
           <p>
               <label>Palabra:</label>
               <input name="entrada" list="lista" id="entrada" value="" style=""/>
           </p>
      </div>
    </div>
  </fieldset>
  <input type="submit" class='addsection' value="Añadir">
  <input type="submit" class='remove' value="Eliminar">
  <input type="submit" class='generate' value="Generar imágenes">
  </div>

  </form>

  <div id="images">
    <div class="image">
      <img id="imagen" src="" alt="">
    </div>
  </div>
  <div class="push"></div>
</div>
<div class="footer">
  <a href="proyecto.html">Acerca del proyecto</a> - <a href="licencia.html">Licencia CC-BY-SA</a> - <a href="colaborar.html">Quiero colaborar</a>
  <p>Dyehuty proyect - 2016</p>
</div>


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</body>
</html>

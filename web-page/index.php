<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dyehuty</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wrapper">
<p id = "titulo">Dyehuty</p>
<p id = "npalabras">Número de palabras</p>

<form name="formulario" id="formulario" action="" method="POST">

<datalist id="lista"></datalist>

<?php
$file = fopen("list.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
$numOptionPHP=0;
$arrayPHP[] = array();
while(!feof($file)){
  $arrayPHP[$numOptionPHP]= fgets($file);
  $numOptionPHP++;
}
fclose($file);
?>

<script type="text/javascript">
  var array=<?php echo json_encode($arrayPHP);?>;

  var options = '';

  for(var i = 0; i < array.length-1; i++)
    options += '<option value="'+array[i]+'" />';

  document.getElementById('lista').innerHTML = options;
</script>

  <div id="izq">
  <fieldset>
    <div id="sections">
      <div class="section">
           <p>
               <label for="firstName">Palabra:</label>
               <input name="firstNam" list="lista" id="firstName" value=""/>
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
  <p>Dyehuty proyect - 2016</p>
</div>


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</body>
</html>

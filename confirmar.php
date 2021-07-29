

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="title"> 
      Formulario de registro CFL401
    </div>
    <h4 class="confirm">esta a punto de registrarse con estos datos:</h4>
    <div  class="form">
       <div class="inputfield">
          <label>Nombre completo</label>
          <p class="input" > <?php if(isset($_POST['subir'])){ $nya = $_POST["apellido"]."_".$_POST["nombre"];  echo $nya;  };  ?></p>
       </div>  
       <div class="inputfield">
          <label>Domicilio</label>
          <p class="input" > <?php if(isset($_POST['subir'])){$domicilio = $_POST["domicilio"]; echo $domicilio; };?></p>
       </div>  
      <div class="inputfield">
          <label>Codigo postal</label>
          <p class="input" > <?php if(isset($_POST['subir'])){$cp = $_POST["cp"]; echo $cp; };?></p>
       </div> 
       <div class="inputfield">
          <label>Tipo de documento</label>
           <p class="input"> <?php if(isset($_POST['subir'])){$tdoc = $_POST["tdoc"]; echo $tdoc; };?></p>
       </div>  
       <div class="inputfield">
          <label>Numero de documento</label>
           <p class="input"> <?php if(isset($_POST['subir'])){$ndoc = $_POST["documento"]; echo $ndoc; };?></p>
       </div>  
       <div class="inputfield">
          <label>Telefono</label>
          <p class="input"> <?php if(isset($_POST['subir'])){$cel = $_POST["telefono"]; echo $cel; };?></p>
       </div> 
       <div class="inputfield">
          <label>Estado civil</label>
          <p class="input"> <?php if(isset($_POST['subir'])){$estado = $_POST["estado"]; echo $estado; };?></p>
       </div> 
       <div class="inputfield">
          <label>Genero</label>
          <p class="input"> <?php if(isset($_POST['subir'])){$sexo = $_POST["sexo"]; echo $sexo; };?></p>
       </div> 
        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
          </label>
          <p>Confirmo que todos los campos son correctos</p>
       </div> 
      <div class="inputfield">
      <a class="botones" href="./index.php">
     <input id="submit" type="submit" onclick="window.location.reload()" value="Aceptar" name="enviar" class="btn">
     <button  id="submit" onclick="window.location='./index.php'" class="btn" >Cancelar</button>
     </a>
      </div>
</div>
</div>
</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<?php include("conexion.php"); ?>
<?php include("datos.php"); ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>formulario de registro</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="wrapper">
    <div class="title"> 
      Formulario de registro CFL401
    </div>
<form autocomplete="off" class="form" method="POST" action="confirmar.php">
  <div class="inputfield">
    <label>Nombre</label>
          <input type="text" name="nombre" class="input" class="nombre" Required >
       </div>  
        <div class="inputfield">
          <label>Apellido</label>
          <input type="text" name="apellido" class="input" Required >
       </div>  
       <div class="inputfield">
          <label>Domicilio</label>
          <input type="text" name="domicilio" class="input" required>
       </div>  
      <div class="inputfield">
          <label>Codigo postal</label>
          <input type="number" name="cp" class="input" required min=0 oninput="validity.valid||(value='');">
       </div> 
       <div class="inputfield">
          <label>Tipo de documento</label>
          <div class="custom_select" >
            <select name="tdoc" required>
              <option value="">Elija un campo</option>
              <option value="DNI">DNI</option>
              <option value="DU">DU</option>
              <option value="PASAPORTE">PASAPORTE</option>
              <option value="LE">LE</option>
              <option value="OTROS">OTROS</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Numero de documento</label>
          <input type="number" name="documento" class="input" required>
       </div>  
       <div class="inputfield">
          <label>Telefono</label>
          <input type="number" name="telefono" class="input" required>
       </div> 
        <div class="inputfield">
          <label>Estado civil</label>
          <div class="custom_select">
            <select name="estado" required>
              <option value="">Elija un campo</option>
              <option value="Casado">CASADO</option>
              <option value="Soltero">SOLTERO</option>
              <option value="Viudo">VIUDO</option>
              <option value="Divorciado">DIVORCIADO</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Sexo</label>
          <div class="custom_select">
            <select name="sexo" required>
              <option value="">Elija un campo</option>
              <option value="masculino">MASCULINO</option>
              <option value="femenino">FEMENINO</option>
              <option value="no binario">NO BINARIO</option>
            </select>
          </div>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Registrarme" name="subir" class="btn">
      </div>
  </form>
 </div>	
</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
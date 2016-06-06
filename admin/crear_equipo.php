<?php require_once("includes/header.php"); ?>

<form class="form-horizontal" action="crear_p.php" method="POST" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Crear Equipo</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>
  <div class="col-md-5">
  <input id="nombre" name="nombre" type="text" placeholder="Nombre del equipo" class="form-control input-md" required="">
  <span class="help-block">Ejemplo: Real Barcelona</span>
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Escudo del equipo</label>
  <div class="col-md-4">
    <input id="foto" name="foto" class="input-file" type="file">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Terminos y Condiciones</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="termin" id="termin" value="1" required="true">
      Acepto los <a href="terminos.html" target="_blank">terminos de uso.</a>
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-success">Crear</button>
  </div>
</div>


</fieldset>
</form>
<?php require_once("includes/footer.php"); ?>

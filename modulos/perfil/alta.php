

<?php


require_once '../../class/Modulo.php';
require_once '../../menu.php';

$listadoModulos=Modulo::obtenerTodos();


?>

<!DOCTYPE html>
<html>
<head>
  <title>Nuevo Perfil</title>
</head>
<body>

  <section id="main-content">
    <section class="wrapper">
    <div class="row mt">

      <div class="col-lg-12">
       <h4><i class="fa fa-angle-right"></i> Nuevo Pefil</h4>
       <div class="form-panel">
       <div class=" form">
        <br>
         <form class="cmxform form-horizontal style-form" id="commentForm" name="frmDatos" method="POST" action = "procesar/guardar.php">
               <div class="row mt">
                  <label class="col-lg-2 control-label">Descripcion:</label>
                  <div class="col-lg-10">
                    <input type="text" name="txtDescripcion" id= "txtDescripcion" class="form-control">
                  </div>
                </div>
                  <div class="row mt">
                  <label class="col-lg-2 control-label">Acceso a modulos: </label>
                  <div class="col-lg-10">
                  <select name= "cboModulos[]" multiple style="width: 150px; height: 150px;">
                  <?php foreach($listadoModulos as $modulo): ?>
                    <option value="<?php echo $modulo->getIdModulo();?>"><?php echo $modulo?></option>
                  <?php endforeach?>
                </select>
                </div>
              </div>
              <div align="left">
                 
                  <div class="row mt">
                  <div class="col-lg-offset-2 col-lg-10">
                   <input type="submit" name="btnGuardar" value="Guardar">
                   </div>
                   </div>
                </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>
</section>

</body>


</html>
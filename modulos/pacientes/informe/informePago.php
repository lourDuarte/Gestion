<?php

require_once '../../../class/MySQL.php';
require_once '../../../menu.php';
require_once '../../../class/Profesional.php';


if (isset($_POST['txtFechaDesde'])) {
    $fechaDesde = $_POST['txtFechaDesde'];
}

if (isset($_POST['txtFechaHasta'])) {
    $fechaHasta = $_POST['txtFechaHasta'];
}


$datos = NULL;

if (isset($fechaDesde) && isset($fechaHasta)) {
    if (!empty($fechaDesde) && !empty($fechaHasta) ) {
        $sql = " SELECT persona.nombre, persona.apellido, obrasocial.co_seguro, "
             . " obrasocial.nombre as nombreObraSocial ,autorizacion.cantidad_autorizada, "
             . " (autorizacion.cantidad_autorizada * obrasocial.co_seguro) as total "
             . " FROM persona "  
             . " INNER JOIN paciente on persona.id_persona = paciente.id_persona "
             . " INNER JOIN paciente_os on paciente.id_paciente = paciente_os.id_paciente "
             . " INNER JOIN obrasocial  on obrasocial.id_obra_social = paciente_os.id_obra_social "
             . " INNER JOIN autorizacion on autorizacion.id_paciente = paciente.id_paciente "
             . " WHERE autorizacion.fecha  BETWEEN '$fechaDesde' AND '$fechaHasta';";

        $mysql = new MySQL();
        $datos = $mysql->consultar($sql);
    }
}

//echo $datos->num_rows;
//echo "<br><br>";

//highlight_string(var_export($datos, true));
//exit;

?>

<html>
    <head></head>
    <body>
<section id="main-content">
    <section class="wrapper">
    <div class="row mt">

      <div class="col-lg-12">
       <h4><i class="fa fa-angle-right"></i> Pagos del Mes</h4>
       <div class="form-panel">
       <div class=" form">
        <div align='center'>
            <form method='POST'>
                Desde: <input type='date' name='txtFechaDesde'>
                &nbsp;&nbsp;
                Hasta: <input type='date' name='txtFechaHasta'>
                <br><br>
                
                <br><br>
                <input type='submit' value='Consultar'>
            </form>
            <br><br>
            <?php if (!is_null($datos)): ?>
                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Precio co_seguro</th>
                        <th>Obra Social</th>
                        <th>Cantidad Autorizada</th>
                        <th>Pago Total</th>
                    </tr>
                    <?php while($row = $datos->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido'] ?></td>
                        <td><?php echo $row['co_seguro'] ?></td>
                        <td><?php echo $row['nombreObraSocial'] ?></td>
                        <td><?php echo $row['cantidad_autorizada'] ?></td>
                        <td><?php echo $row['total'] ?></td>
                        </tr>
                    <?php endwhile ?>
                </table>
            <?php endif ?>

        </div>
    </div>
</div>
</div>
</div>
</section>
</section>


    </body>
</html>
<?php

require_once '../../../class/MySQL.php';
require_once '../../../menu.php';
require_once '../../../class/Profesional.php';

$listaProfesional = Profesional::obtenerTodos();

if (isset($_POST['txtFechaDesde'])) {
    $fechaDesde = $_POST['txtFechaDesde'];
}

if (isset($_POST['txtFechaHasta'])) {
    $fechaHasta = $_POST['txtFechaHasta'];
}

if (isset($_POST['txtEstado'])) {
    $estado = $_POST['txtEstado'];
}

if (isset($_POST['txtProfesional'])) {
    $profesional = $_POST['txtProfesional'];
}

$datos = NULL;

if (isset($fechaDesde) && isset($fechaHasta)&& isset($estado) && isset($profesional)) {
    if (!empty($fechaDesde) && !empty($fechaHasta) && !empty($estado) && !empty($profesional)) {
        $sql = "SELECT turno.fecha, turno.hora, estadoTurno.descripcion, persona.nombre,persona.apellido "
            . " FROM turno "
            . " INNER JOIN estadoTurno ON turno.id_estado = estadoTurno.id_estado "
            . " INNER JOIN profesional ON profesional.id_profesional = turno.id_profesional "
            . " INNER JOIN persona ON persona.id_persona = profesional.id_persona "
            . " WHERE turno.fecha BETWEEN '$fechaDesde' AND '$fechaHasta' "
            . " AND estadoTurno.id_estado = '$estado' "
            . " AND profesional.id_profesional = '$profesional';";

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
       <h4><i class="fa fa-angle-right"></i> Turnos del mes</h4>
       <div class="form-panel">
       <div class=" form">
        <div align='center'>
            <form method='POST'>
                Desde: <input type='date' name='txtFechaDesde'>
                &nbsp;&nbsp;
                Hasta: <input type='date' name='txtFechaHasta'>
                <br><br>
                Estado: 
                <select name="txtEstado">
                    <option value="0">Seleccionar</option>
                    <option value="1">Cancelado</option>
                    <option value="2">Atendido</option>
                </select>
                Profesional:
                <select  name="txtProfesional"  >
              <option value="0">Profesional</option>
                ...
                <?php foreach ($listaProfesional as $profesional): ?>

                    <option   value="<?php echo $profesional->getIdProfesional(); ?>">
                        <?php echo $profesional; ?>
                    </option>

                <?php endforeach ?>
            </select>
                <br><br>
                <input type='submit' value='Consultar'>
            </form>
            <br><br>
            <?php if (!is_null($datos)): ?>
                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Descripcion</th>
                    </tr>
                    <?php while($row = $datos->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td><?php echo $row['hora'] ?></td>
                        <td><?php echo $row['descripcion'] ?></td>
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
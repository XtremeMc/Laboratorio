<?php
class FormularioPlanta {
public function mostrar()
{
    $html = <<<EOT
    <div class="container-fluid well">
    <div class="row clearfix">
    <form role="form" class="form-horizontal"
    action="../controlador/liquidar_empleado.php">

            <div class="form-group">
            <label class="col-sm-3
            control-label">Identificacion</label>
            <div class="col-sm-6">
            <input type="hidden" name="tipo_empleado"
            value="1">
            <input type="text" class="form-control"
            name="identificacion"
            id="identificacion" required
            placeholder="Identificacion...">
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-3
            control-label">Nombre</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"
            name="nombre" id="nombre" required
            placeholder="Nombre...">
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-3
            control-label">Cargo</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"
            name="cargo" id="cargo" required
            placeholder="Cargo...">
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-3 control-label">Sueldo
            básico</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"
            name="sueldo_basico" id="sueldo_basico" required
            placeholder="Sueldo básico...">
            </div>
            </div>


            <div class="form-group">
            <label class="col-sm-3 control-label">Horas
            Extras</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"
            name="horas_extras" id="horas_extras" required
            placeholder="Horas extras...">
            </div>
            </div>


            <div class="form-group">
            <label class="col-sm-3
            control-label">Deducciones</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"
            name="deducciones" id="deducciones" required
            placeholder="Deducciones...">
            </div>
            </div>

            <div class="form-group">
        
            <a href="../home.html" class="col-sm-4 col-sm-offset-3">
            <input type="button" class="btn btn-info"
            value="INICIO">

            <div class="col-sm-4 col-sm-offset-3">
            <input type="submit" class="btn btn-info"
            value="Procesar">
            </div>
            </div>

    </form>
    </div>
    </div>
EOT;
echo $html ;
}
}
?>

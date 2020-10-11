<?php
class FormularioContratista {
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
            value="2">

            <input type="text" class="form-control"
            name="identificacion" id="identificacion" required
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
            <label class="col-sm-3 control-label">Valor
            de la hora</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"
            name="valor_hora" id="valor_hora" required
            placeholder="Valor de la hora...">
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-3 control-label">Horas
            Trabajadas</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"
            name="horas_trabajadas" id="horas_trabajadas" required
            placeholder="Horas extras...">
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

<?php
include '../../models/aguasArriba.php';
$aguasArriba = new AguasArriba();

$preguntas = $aguasArriba->getPreguntas();
$resp      = $aguasArriba->getResp();
?>
<div class="col-12">
    <br>
</div>
<div class="col-12 titulo_verde">
     Proceso  de Aguas Arriba
</div>
<div class="col-12">
    <br>
</div>
<div class="col-12 texto_verde text-center">
    <br>
</div>
<div class="col-12">
    <br>
</div>
    <?php
if (count($preguntas) > 0) {
    foreach ($preguntas as $column => $value) {
        ?>
<div class="col-12 text-center">
    <label class="titulo_gris">
    <?php
echo utf8_encode($value['type_approach']);
        ?>
    </label>
</div>
<div class="col-12">
    <br>
</div>
<div class="col-12 text-center">
    <?php
if (count($resp) > 0) {
            foreach ($resp as $column => $value) {
                ?>
    <button id="mi-boton" class="btn respuestas">
    <?php
echo utf8_encode($value['answer']);
                ?>
    </button>
    <?php
}
        }
        ?>
</div>
<div class="col-12">
    <br>
</div>
<?php
}
}
?>
<div class="row">
    <div class="col-2 footer_form">
        <br>
        <div class="Rectangle-66 pt-2 text-center" >
            <a data-toggle="tab" href="#nav-kri" role="tab" aria-controls="nav-kri" aria-selected="false">
                <input type="submit" value="Volver" class="boton" name="create" id="previous_aguasArriba">
            </a>
        </div>
        <br>
    </div>
    <div class="col-8 footer_form">
    </div>
    <div class="col-2 footer_form">
        <br>
        <div class="Rectangle-66 pt-2 text-center" >
            <a data-toggle="tab" href="#nav-proceso" role="tab" aria-controls="nav-proceso" aria-selected="false">
                <input type="submit" value="Continuar" class="boton" name="create" id="next_aguasArriba">
            </a>
        </div>
        <br>
    </div>
</div>
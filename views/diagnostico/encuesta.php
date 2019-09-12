<?php
include '../../models/corp_gover.php';
$corp_gover = new Corp_gover();

$preguntas = $corp_gover->getPreguntas();
$resp      = $corp_gover->getResp();
?>
<div class="col-12">
    <br>
</div>
<div class="col-12 titulo_verde">
    Preguntas Generales
</div>
<div class="col-12">
    <br>
</div>
<div class="col-12 texto_verde text-center">
    Para empezar responda las siguientes preguntas
</div>
<div class="col-12">
    <br>
</div>

    <?php
$cont_pestana = 1;
$cont_prgta   = 1;
if (count($preguntas) > 0) {
    foreach ($preguntas as $column => $value) {
        ?>
    <div class="col-12 text-center">
        <label class="titulo_gris">
        <?php
echo utf8_encode($value['question_text']);
        ?>
       </label>
    </div>
    <div class="col-12">
       <br>
    </div>
    <div class="col-12 text-center">
       <?php
$cont_resp = 1;
        if (count($resp) > 0) {
            foreach ($resp as $column => $value) {

                echo "<button id='rpta_$cont_pestana$cont_prgta$cont_resp' class='btn respuestas' value='" . $value['value'] . "' name='resp'>";
                echo utf8_encode($value['answer']);
                echo "</button>";
                ?>

        <?php
$cont_resp++;
            }
            $cant_rpta = $cont_resp - 1;
            echo "<input type='hidden' id='cant_rpta_$cont_pestana$cont_prgta' value='$cant_rpta'>";
            echo "<input type='hidden' id='opcion_$cont_pestana$cont_prgta' value=''>";
            $cont_prgta++;
        }
        ?>
    </div>
<div class="col-12">
    <br>
</div>
<?php
}
}
$cant_prgta = $cont_prgta - 1;
echo "<input type='hidden' id='cant_pgta_$cont_pestana' value='$cant_prgta'>";
?>
<div class="row">
    <div class="col-10 footer_form">
    </div>
    <div class="col-2 footer_form">
        <br>
        <div class="Rectangle-66 pt-2 text-center" >
            <a id="nav-company-tab" data-toggle="tab" href="#nav-company" role="tab" aria-controls="nav-company" aria-selected="true">
                <input type="submit" value="Continuar" id="next_encuesta" class="boton" name="create">
            </a>
        </div>
        <br>
    </div>
</div>
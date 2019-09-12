<?php
include '../validar_sesion.php';
include '../header_diagnostico.php';
?>
<div class="container-fluid" id="principal">
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <nav>
        <div class="nav nav-tabs pestanas_tab" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-encuesta-tab" data-toggle="tab" href="#nav-encuesta" role="tab" aria-controls="nav-encuesta" aria-selected="true">
            <img src="../../images/encuesta_icon.png" srcset="../../images/encuesta_icon@2x.png 2x, ../../images/encuesta_icon@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> Encuesta</label>
          </a>
          <a class="nav-item nav-link" id="nav-company-tab" data-toggle="tab" href="#nav-company" role="tab" aria-controls="nav-company" aria-selected="false">
            <img src="../../images/compania.png" srcset="../../images/compania_icon@2x.png 2x, ../../images/compania_icon@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> Compañia</label>
          </a>
          <a class="nav-item nav-link" id="nav-cadena-tab" data-toggle="tab" href="#nav-cadena" role="tab" aria-controls="nav-cadena" aria-selected="false">
            <img src="../../images/cadena.png" srcset="../../images/cadena_icon@2x.png 2x, ../../images/cadena_icon@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> Cadena</label>
          </a>
          <a class="nav-item nav-link" id="nav-tipo-tab" data-toggle="tab" href="#nav-tipo" role="tab" aria-controls="nav-tipo" aria-selected="false">
            <img src="../../images/tipo_cadena.png" srcset="../../images/tipo_cadena_icon@2x.png 2x, ../../images/tipo_cadena_icon@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> Tipo</label>
          </a>
          <a class="nav-item nav-link" id="nav-kpi-tab" data-toggle="tab" href="#nav-kpi" role="tab" aria-controls="nav-kpi" aria-selected="false">
            <img src="../../images/kpi_icon.png" srcset="../../images/kpi_icon@2x.png 2x, ../../images/kpi_icon@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> KPI's</label>
          </a>
          <a class="nav-item nav-link" id="nav-kri-tab" data-toggle="tab" href="#nav-kri" role="tab" aria-controls="nav-kri" aria-selected="false">
            <img src="../../images/kr_icon.png" srcset="../../images/kr_icon@2x.png 2x, ../../images/kr_icon@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> KRI's</label>
          </a>
          <a class="nav-item nav-link" id="nav-aguasArriba-tab" data-toggle="tab" href="#nav-aguasArriba" role="tab" aria-controls="nav-aguasArriba" aria-selected="false">
            <img src="../../images/aguas_arriba_icon.png" srcset="../../images/aguas_arriba_icon@2x.png 2x, ../../images/aguas_arriba_icon@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> Aguas arriba</label>
          </a>
          <a class="nav-item nav-link" id="nav-proceso-tab" data-toggle="tab" href="#nav-proceso" role="tab" aria-controls="nav-proceso" aria-selected="false">
            <img src="../../images/icono_proceso.png" srcset="../../images/icono_proceso@2x.png 2x, ../../images/icono_proceso@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> Proceso</label>
          </a>
          <a class="nav-item nav-link" id="nav-aguasAbajo-tab" data-toggle="tab" href="#nav-aguasAbajo" role="tab" aria-controls="nav-aguasAbajo" aria-selected="false">
            <img src="../../images/aguas_abajo_icon.png" srcset="../../images/aguas_abajo_icon@2x.png 2x, ../../images/aguas_abajo_icon@3x.png 3x" class="iconos_tab">
            <label class="titulos_tab"> Aguas abajo</label>
          </a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-encuesta" role="tabpanel" aria-labelledby="nav-encuesta-tab">
            <?php include 'encuesta.php'?>
        </div>
        <div class="tab-pane fade" id="nav-company" role="tabpanel" aria-labelledby="nav-company-tab">
            <?php include 'company.php'?>
        </div>
        <div class="tab-pane fade" id="nav-cadena" role="tabpanel" aria-labelledby="nav-cadena-tab">
          <?php include 'cadena.php'?>
        </div>
        <div class="tab-pane fade" id="nav-tipo" role="tabpanel" aria-labelledby="nav-tipo-tab">
           <?php include 'tipo.php'?>
        </div>
        <div class="tab-pane fade" id="nav-kpi" role="tabpanel" aria-labelledby="nav-kpi-tab">
           <?php include 'kpi.php'?>
        </div>
        <div class="tab-pane fade" id="nav-kri" role="tabpanel" aria-labelledby="nav-kri-tab">
           <?php include 'kri.php'?>
        </div>
        <div class="tab-pane fade" id="nav-aguasArriba" role="tabpanel" aria-labelledby="nav-aguasArriba-tab">
           <?php include 'aguasArriba.php'?>
        </div>
        <div class="tab-pane fade" id="nav-proceso" role="tabpanel" aria-labelledby="nav-proceso-tab">
           <?php include 'proceso.php'?>
        </div>
        <div class="tab-pane fade" id="nav-aguasAbajo" role="tabpanel" aria-labelledby="nav-aguasAbajo-tab">
          <?php include 'aguasAbajo.php'?>
        </div>
      </div>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
<?php
include '../footer.php';
?>
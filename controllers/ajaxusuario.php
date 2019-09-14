<?php

include dirname(__file__, 2) . '/models/users.php';

$users = new Users();

$r              = array();
$tipo           = isset($_POST['tipo']) ? $_POST['tipo'] : "";
$idDepartamento = isset($_POST['idDepartamento']) ? $_POST['idDepartamento'] : "";
$idCiudad       = isset($_POST['idCiudad']) ? $_POST['idCiudad'] : "";

switch ($tipo) {
    case 'consultarciudad':
        $resultado = $users->getCiudadID($idDepartamento);
        /**/
        if ($resultado) {
            $r = $resultado;
        } else {
            $r["estado"] = "Error";
        }
        break;

    case 'consultararea':
        $resultado = $users->getAreaID($idCiudad);
        /**/
        if ($resultado) {
            $r = $resultado;
        } else {
            $r["estado"] = "Error";
        }
        break;

    case 'eliminarlogico':
        $id         = $_POST['id'];
        $generico   = new Generico_DAO();
        $q_inserta  = "update `actor` SET estadoV=2 where pkID='$id'";
        $r["query"] = $q_inserta;
        $resultado  = $generico->EjecutaActualizar($q_inserta);
        /**/
        if ($resultado) {
            $r[] = $resultado;

        } else {
            $r["estado"]  = "Error";
            $r["mensaje"] = "No se inserto.";
        }
        break;

    default:
        # code...
        break;
}

echo json_encode($r);

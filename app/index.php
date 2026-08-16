<?php
require_once 'config/database.php';

require_once 'controllers/PacienteController.php';

$controlador = new PacienteController($pdo);



$accion = isset($_GET['accion']) ? $_GET['accion'] : 'listar';

if ($accion === 'listar'){
    $controlador->listar();
} elseif ($accion === 'crear'){
    $controlador->crear();
}elseif ($accion === 'guardar'){
    $controlador->guardar();
} elseif ($accion === 'editar'){
    $controlador->editar();
} elseif ($accion === 'actualizar'){
    $controlador->actualizar();
}elseif ($accion === "eliminar") {
    $controlador->eliminar();
} elseif($accion === 'informe'){
    $controlador->informe();
}else {
    echo "Página no encontrada (Error 404).";
}

?>
<?php
require_once 'models/Paciente.php';

class PacienteController {
    private $db;

    public function __construct($conexion){
        $this->db = $conexion;
    }

    public function listar(){
        $modelo = new Paciente($this->db);
        $pacientes = $modelo->obtenerTodo();

        require_once "views/listado_pacientes.php";
    }


    public function crear(){
        require_once "views/formulario_pacientes.php";
    }



    public function editar(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $modelo = new Paciente($this->db);
            $paciente = $modelo->obtenerPorId($id);
            require 'views/formulario_pacientes.php';
        }
    }

    public function actualizar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $modelo = new Paciente($this->db);
            $modelo->actualizar($_POST);

            header('Location: index.php?accion=listar');
            exit();
        }
    }


    public function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $modelo = new Paciente($this->db);
            $modelo->insertar($_POST);
            header('Location: index.php?accion=listar');
            exit();
            
        }
    }


    public function eliminar(){
        if (isset($_GET['id'])){
            $modelo = new Paciente($this->db);
            $modelo->eliminar($_GET['id']);
            header('Location: index.php?accion=listar');
            exit();
        }
    }

    public function informe(){
        $modelo = new Paciente($this->db);
        $estadisticas = $modelo->obtenerInforme();
        require_once "views/informe.php";
    }
}

?>
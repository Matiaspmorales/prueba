<?php

class Paciente {
    private $pdo;
    
    public function __construct($conexion){
        $this->pdo = $conexion;    
    }

    public function obtenerTodo(){
        $query = "SELECT * FROM pacientes ORDER BY fecha_registro DESC";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertar($datos){
        $query = "INSERT INTO pacientes (id, rut, nombres, apellidos, fecha_nacimiento, genero, direccion, telefono)
                    VALUES (UUID(), :rut, :nombres, :apellidos, :nacimiento, :genero, :direccion, :telefono)";
        $consulta = $this->pdo->prepare($query);

        return $consulta->execute([
            ':rut' => $datos['rut'],
            ':nombres' => $datos['nombres'],
            ':apellidos' => $datos['apellidos'],
            ':nacimiento' => $datos['fecha_nacimiento'],
            ':genero' => $datos['genero'],
            ':direccion' => $datos['direccion'],
            ':telefono' => $datos['telefono']
        ]);
        }

    public function obtenerPorId($id){
        $query = "SELECT * FROM pacientes WHERE id = :id";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([':id'=>$id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($datos){
        $query = "UPDATE pacientes SET
        rut = :rut,
        nombres = :nombres,
        apellidos = :apellidos,
        fecha_nacimiento = :nacimiento,
        genero = :genero,
        direccion = :direccion,
        telefono = :telefono
        WHERE id = :id";
        $consulta = $this->pdo->prepare($query);

        return $consulta->execute([
            ':id' => $datos['id'],
            ':rut' => $datos['rut'],
            ':nombres' => $datos['nombres'],
            ':apellidos' => $datos['apellidos'],
            ':nacimiento' => $datos['fecha_nacimiento'],
            ':genero' => $datos['genero'],
            ':direccion' => $datos['direccion'],
            ':telefono' => $datos['telefono']
        ]);
    }

    public function eliminar($id){
        $query = "DELETE FROM pacientes WHERE id = :id";
        $consulta = $this->pdo->prepare($query);
        return $consulta->execute([':id'=> $id]);
    }


    public function obtenerInforme(){
        
        $consulta_total = $this->pdo->query('SELECT COUNT(*) as total FROM pacientes');
        $total = $consulta_total->fetch(PDO::FETCH_ASSOC)['total'];

        $consulta_genero = $this->pdo->query('SELECT genero, COUNT(*) as cantidad FROM pacientes GROUP BY genero');
        $genero = $consulta_genero->fetchAll(PDO::FETCH_ASSOC);

        return [
            'total' => $total,
            'por_genero' => $genero
        ];
    }   


}

?>
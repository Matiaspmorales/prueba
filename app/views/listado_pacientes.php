<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pacientes</title>
</head>
<body>
    <h2>Listado de Pacientes</h2>
    <a href="index.php?accion=crear">Registrar paciente</a>

    <table border="1">
        <thead>
            <tr>
                <th>Rut</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Género</th>
                <th>Teléfono</th>
                <th>Fecha y hora de registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?php echo $paciente['rut']; ?></td>
                    <td><?php echo $paciente['nombres']; ?></td>
                    <td><?php echo $paciente['apellidos']; ?></td>
                    <td><?php echo $paciente['fecha_nacimiento']; ?></td>
                    <td><?php echo $paciente['genero']; ?></td>
                    <td><?php echo $paciente['telefono']; ?></td>
                    <td><?php echo $paciente['fecha_registro'];?></td>
                    <td>
                        <a href="index.php?accion=editar&id=<?php echo $paciente['id']; ?>">Editar</a>
                        <a href="index.php?accion=eliminar&id=<?php echo $paciente['id']; ?>" 
           onclick="return confirm('¿Estás seguro de que deseas eliminar este paciente?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-primary m-0">Listado de Pacientes</h2>
                <a href="index.php?accion=crear" class="btn btn-success">+ Registrar paciente</a>
                <a href="index.php?accion=informe" class="btn btn-info text-white">Ver Informe</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Rut</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Género</th>
                            <th>Teléfono</th>
                            <th>Fecha y hora de registro</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($pacientes)): ?>
                            <?php foreach ($pacientes as $paciente): ?>
                                <tr>
                                    <td><?php echo $paciente['rut']; ?></td>
                                    <td><?php echo $paciente['nombres']; ?></td>
                                    <td><?php echo $paciente['apellidos']; ?></td>
                                    <td><?php echo $paciente['fecha_nacimiento']; ?></td>
                                    <td><?php echo $paciente['genero']; ?></td>
                                    <td><?php echo $paciente['telefono']; ?></td>
                                    <td><?php echo $paciente['fecha_registro']; ?></td>
                                    <td class="text-center">
                                        <a href="index.php?accion=editar&id=<?php echo $paciente['id']; ?>" class="btn btn-sm btn-warning text-white me-1">Editar</a>
                                        <a href="index.php?accion=eliminar&id=<?php echo $paciente['id']; ?>" 
                                           class="btn btn-sm btn-danger"
                                           onclick="return confirm('¿Estás seguro de que deseas eliminar este paciente?');">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">No hay pacientes registrados todavía.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($paciente) ? 'Editar Paciente' : 'Registrar Paciente'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="mb-4 text-primary"><?php echo isset($paciente) ? 'Editar Paciente' : 'Registrar Nuevo Paciente'; ?></h2>

            <form action="index.php?accion=<?php echo isset($paciente) ? 'actualizar' : 'guardar'; ?>" method="POST">
                
                <?php if (isset($paciente)): ?>
                    <input type="hidden" name="id" value="<?php echo $paciente['id']; ?>">
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="rut" class="form-label">RUT:</label>
                        <input type="text" class="form-control" id="rut" name="rut" value="<?php echo isset($paciente) ? $paciente['rut'] : ''; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nombres" class="form-label">Nombres:</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo isset($paciente) ? $paciente['nombres'] : ''; ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo isset($paciente) ? $paciente['apellidos'] : ''; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo isset($paciente) ? $paciente['fecha_nacimiento'] : ''; ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label">Género:</label>
                    <select class="form-select" id="genero" name="genero" required>
                        <option value="">Seleccione...</option>
                        <option value="M" <?php echo (isset($paciente) && $paciente['genero'] == 'M') ? 'selected' : ''; ?>>Masculino</option>
                        <option value="F" <?php echo (isset($paciente) && $paciente['genero'] == 'F') ? 'selected' : ''; ?>>Femenino</option>
                        <option value="Otro" <?php echo (isset($paciente) && $paciente['genero'] == 'Otro') ? 'selected' : ''; ?>>Otro</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo isset($paciente) ? $paciente['direccion'] : ''; ?>">
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo isset($paciente) ? $paciente['telefono'] : ''; ?>">
                </div>

                <button type="submit" class="btn btn-primary w-100"><?php echo isset($paciente) ? 'Actualizar Paciente' : 'Guardar Paciente'; ?></button>
            </form>
            
            <div class="mt-3 text-center">
                <a href="index.php?accion=listar" class="text-decoration-none">Volver al listado</a>
            </div>
        </div>
    </div>

</body>
</html>
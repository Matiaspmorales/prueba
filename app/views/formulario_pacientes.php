<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($paciente) ? 'Editar Paciente' : 'Registrar Paciente'; ?></title>
</head>
<body>
    <!-- El título cambia según si estamos editando o creando -->
    <h2><?php echo isset($paciente) ? 'Editar Paciente' : 'Registrar Nuevo Paciente'; ?></h2>

    <!-- 1. El action cambia dinámicamente: si existe $paciente va a actualizar, si no, a guardar -->
    <form action="index.php?accion=<?php echo isset($paciente) ? 'actualizar' : 'guardar'; ?>" method="POST">
        
        <!-- 2. Si estamos editando, inyectamos el ID oculto para que la base de datos sepa a quién modificar -->
        <?php if (isset($paciente)): ?>
            <input type="hidden" name="id" value="<?php echo $paciente['id']; ?>">
        <?php endif; ?>

        <div>
            <label for="rut">RUT:</label><br>
            <!-- 3. Rellenamos el value con el dato anterior si estamos editando, o lo dejamos vacío si es nuevo -->
            <input type="text" id="rut" name="rut" value="<?php echo isset($paciente) ? $paciente['rut'] : ''; ?>" required>
        </div>
        <br>
        <div>
            <label for="nombres">Nombres:</label><br>
            <input type="text" id="nombres" name="nombres" value="<?php echo isset($paciente) ? $paciente['nombres'] : ''; ?>" required>
        </div>
        <br>
        <div>
            <label for="apellidos">Apellidos:</label><br>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo isset($paciente) ? $paciente['apellidos'] : ''; ?>" required>
        </div>
        <br>
        <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo isset($paciente) ? $paciente['fecha_nacimiento'] : ''; ?>" required>
        </div>
        <br>
        <div>
            <label for="genero">Género:</label><br>
            <select id="genero" name="genero" required>
                <option value="">Seleccione...</option>
                <!-- Validamos qué opción estaba guardada para marcarla como 'selected' -->
                <option value="M" <?php echo (isset($paciente) && $paciente['genero'] == 'M') ? 'selected' : ''; ?>>Masculino</option>
                <option value="F" <?php echo (isset($paciente) && $paciente['genero'] == 'F') ? 'selected' : ''; ?>>Femenino</option>
                <option value="Otro" <?php echo (isset($paciente) && $paciente['genero'] == 'Otro') ? 'selected' : ''; ?>>Otro</option>
            </select>
        </div>
        <br>
        <div>
            <label for="direccion">Dirección:</label><br>
            <input type="text" id="direccion" name="direccion" value="<?php echo isset($paciente) ? $paciente['direccion'] : ''; ?>">
        </div>
        <br>
        <div>
            <label for="telefono">Teléfono:</label><br>
            <input type="text" id="telefono" name="telefono" value="<?php echo isset($paciente) ? $paciente['telefono'] : ''; ?>">
        </div>
        <br>
        <button type="submit"><?php echo isset($paciente) ? 'Actualizar Paciente' : 'Guardar Paciente'; ?></button>
    </form>
    
    <br>
    <a href="index.php?accion=listar">Volver al listado</a>
</body>
</html>
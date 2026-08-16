<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Informe de Pacientes</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-primary mb-4">Informe total de Pacientes</h2>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary text-white p-3 shadow-sm">
                        <h5>Total Registrados</h5>
                        <h3><?php echo $estadisticas['total']; ?></h3>
                    </div>
                </div>

                <?php foreach ($estadisticas['por_genero'] as $dato): ?>
                <div class="col-md-4">
                    <div class="card bg-info text-white p-3 shadow-sm">
                        <h5>Género: <?php echo $dato['genero']; ?></h5>
                        <h3><?php echo $dato['cantidad']; ?></h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="mt-4">
                <a href="index.php?accion=listar" class="btn btn-secondary">Volver al listado</a>
            </div>
        </div>
    </div>
</body>
</html>
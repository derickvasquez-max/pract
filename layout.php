<?php
function cabecera($titulo) { ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titulo ?> | PERSONAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background:#F5EBDD; color:#5B4B3A; }
        .navbar, .table thead { background:#E8D5B5 !important; }
        .card { background:#FAF3E7; border:1px solid #E0CBA8; }
        .btn-arena { background:#D9C3A0; color:#5B4B3A; border:0; }
        .btn-arena:hover { background:#CBB38A; color:#4a3b2b; }
        code.sql { display:block; background:#EFE2CB; color:#5B4B3A; padding:.6rem .8rem; border-radius:.4rem; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">PERSONAL</a>
        <div class="navbar-nav">
            <a class="nav-link" href="departamentos.php">Departamentos</a>
            <a class="nav-link" href="empleados.php">Empleados</a>
            <a class="nav-link" href="consultas.php">Consultas</a>
        </div>
    </div>
</nav>
<div class="container pb-5">
<h1 class="h3 mb-4"><?= $titulo ?></h1>
<?php }

function pie() { ?>
</div>
</body>
</html>
<?php }

// Ejecuta una consulta y muestra el SQL + el resultado en una tabla
function consulta($pdo, $titulo, $sql) {
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); ?>
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h2 class="h6 fw-bold"><?= $titulo ?></h2>
            <code class="sql mb-3"><?= htmlspecialchars($sql) ?></code>
            <div class="table-responsive">
                <table class="table table-sm table-hover align-middle mb-0">
                    <?php if ($rows): ?>
                    <thead><tr>
                        <?php foreach (array_keys($rows[0]) as $c): ?><th><?= $c ?></th><?php endforeach; ?>
                    </tr></thead>
                    <tbody>
                        <?php foreach ($rows as $r): ?>
                        <tr><?php foreach ($r as $v): ?><td><?= htmlspecialchars($v) ?></td><?php endforeach; ?></tr>
                        <?php endforeach; ?>
                    </tbody>
                    <?php else: ?>
                    <tr><td>Sin resultados</td></tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
<?php }

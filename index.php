<?php
require 'layout.php';
cabecera('Examen práctico – Base de datos PERSONAL');
?>
<p class="mb-4"><strong>Alumno:</strong> Derick Vasquez Manrique &middot; <strong>Unidad didáctica:</strong> Programación Web</p>

<div class="row g-3 mb-4">
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
        <h2 class="h5">Departamentos</h2><p>Consulta 1.</p>
        <a href="departamentos.php" class="btn btn-arena">Ver</a></div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
        <h2 class="h5">Empleados</h2><p>Consulta 2.</p>
        <a href="empleados.php" class="btn btn-arena">Ver</a></div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
        <h2 class="h5">Consultas</h2><p>Consultas 3 a 10.</p>
        <a href="consultas.php" class="btn btn-arena">Ver</a></div></div></div>
</div>

<div class="card"><div class="card-body">
    <h2 class="h5">Enlaces de entrega</h2>
    <ul class="mb-0">
        <li>Repositorio GitHub: <a href="https://github.com/TU_USUARIO/TU_REPOSITORIO">https://github.com/TU_USUARIO/TU_REPOSITORIO</a></li>
        <li>Hosting: <a href="https://TU_SITIO.ejemplo.com">https://TU_SITIO.ejemplo.com</a></li>
    </ul>
</div></div>
<?php pie(); ?>

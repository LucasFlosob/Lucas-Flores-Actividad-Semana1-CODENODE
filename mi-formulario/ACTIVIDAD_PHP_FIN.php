<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta del Servidor</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 2rem auto; padding: 0 1rem; text-align: center; }
        .mensaje-exito { color: green; font-size: 1.2rem; }
        a { color: #ff0000; text-decoration: none; }
    </style>
</head>
<body>

    <main>
        <h2>Procesamiento completado</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
            $nombre_limpio = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');

            if (!empty($nombre_limpio)) {
                echo "<p class='mensaje-exito'>¡Hola, <strong>$nombre_limpio</strong>! Gracias por tu mensaje.</p>";
            } else {
                echo "<p>Por favor, introduce un nombre válido.</p>";
            }
        } else {
            echo "<p>No se han recibido datos.</p>";
        }
        ?>

        <p>
            <a href="ACTIVIDAD_HTML_FIN.html">← Volver al formulario</a>
        </p>
    </main>

</body>
</html>
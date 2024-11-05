<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entretenimiento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="contenedor">
        <!-- Botón para mostrar el video -->
        <button id="boton" onclick="iniciarMultimedia()">Presioname</button>

        <!-- Video oculto al inicio -->
        <div id="videoContainer" style="display: none;">
            <video id="video" controls autoplay>
                <source src="momo.mp4" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

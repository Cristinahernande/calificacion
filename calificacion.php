<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Calificación</title>
    <style>
        body {
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #007BFF;
            color: white;
            padding: 20px;
        }

        .resultado {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
            margin: 0 auto;
        }

        .mensaje {
            font-size: 18px;
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Resultado de Calificación</h1>
    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $calificacion = $_POST["calificacion"];

            if (is_numeric($calificacion) && $calificacion >= 0 && $calificacion <= 10) {
                if ($calificacion >= 5.0) {
                    echo "<p class='mensaje'>¡Felicidades! Tu calificación ($calificacion) es APROBATORIA.</p>";
                } else {
                    echo "<p class='mensaje'>Lo siento, tu calificación ($calificacion) NO es APROBATORIA.</p>";
                }
            } else {
                echo "<p class='mensaje'>Ingresa una calificación válida entre 0 y 10.</p>";
            }
        }
        ?>
        <a href="index.php">Volver a ingresar mi calificación</a>
    </div>
</body>
</html>

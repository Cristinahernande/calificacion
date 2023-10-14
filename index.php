
<!DOCTYPE html>
<html>
<head>
    <title>Mi Calificación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        form {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0);
            padding: 20px;
            width: 300px;
            margin: 0 auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        
    </style>
</head>
<body>
    <h1>Verificar Calificación</h1>
    <form method="post" action="calificacion.php">
        Ingrese su calificación: <input type="text" name="calificacion">
        <br>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>



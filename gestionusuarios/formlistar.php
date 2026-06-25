<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="correo">Correo electronico:</label>
        <input type="email" id="correo" name="correo" required>
        <br><br>

        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required>
        <br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="18" max="70" required>
        <br><br>

        <label for="genero">Genero Identificado:</label>
        <select id="genero" name="genero" required>
            <option value="">Seleccione...</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
        <br><br>

        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>
    </form>
</body>
</html>

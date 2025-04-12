<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>
        <?php echo empty($_GET["id"]) ? "Registrar personas"  :  "Modificar"; ?>
    </h1>
    <form action="acciones/guardar_personas.php" method="post">
        <?php
        if(!empty($_GET["id"])){
            echo '<input type="hidden" name="idInput" value="'.$_GET["id"]. '">';
        }
        ?>
        <div>
            <label>Nombre</label>
            <input type="text" name="nombreInput" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="emailInput" required>
        </div>
        <div>
            <label>Edad</label>
            <input type="number" name="edadInput" min="1" required>
        </div>
        <br>
        <div>
            <button type="submit">Guardar</button>
        </div>
        <br>
    </form>
    <a href="persons.php">Volver</a>
    <br>
</body>
</html>
<?php
// Verificamos si el formulario fue enviado correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Capturamos los datos enviados desde el formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $programa = $_POST['programa'];

    // Creamos la línea que vamos a guardar, separando los campos con coma
    $linea = "$nombre, $correo, $programa\n";

    // Guardamos esa línea en el archivo estudiantes.txt (lo crea si no existe)
    file_put_contents("estudiantes.txt", $linea, FILE_APPEND);

    // Mostramos un mensaje de confirmación
    echo "<h2>Estudiante registrado exitosamente.</h2>";
    echo "<a href='index.html'>Volver al formulario</a>";
}
?>

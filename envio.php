<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "nombre_de_usuario";
$password = "contraseña";
$dbname = "nombre_de_la_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO formulario (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();

header("Location: exito.html");
exit(); // Asegura que el script se detenga después de la redirección
?>

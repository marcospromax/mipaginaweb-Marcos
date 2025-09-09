<?php

// Configuración de la base de datos

$servername = "localhost"; // Generalmente "localhost" para entornos locales

$username = "root";        // Usuario por defecto de MySQL en XAMPP/WAMP

$password = "";            // Contraseña por defecto (vacía) en XAMPP/WAMP

$dbname = "biblioteca - tecnica1";       // Nombre de la base de datos que crearon



// Crear conexión

$conn = new mysqli($servername, $username, $password, $dbname);



// Verificar conexión

if ($conn->connect_error) {

    die("Conexión fallida: " . $conn->connect_error);

}

// Verificar si el formulario ha sido enviado (método POST)

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario y sanitizarlos

    // mysqli_real_escape_string previene inyección SQL

    $titulo = $conn->real_escape_string($_POST['titulo del libro']);

    $autor = $conn->real_escape_string($_POST['autor/es']);

    $editorial = $conn->real_escape_string($_POST['editorial']);

    $cantidad = $conn->real_escape_string($_POST['cantidad_total']);

    $materia = $conn->real_escape_string($_POST['materia']);



    // Preparar la consulta SQL para insertar datos

    $sql = "INSERT INTO libros (titulo del libro, autor/es, editorial, cantidad_total, materia) VALUES ('$titulo', '$autor', '$editorial', '$cantidad', '$materia')";



    // Ejecutar la consulta

    if ($conn->query($sql) === TRUE) {

        echo "<!DOCTYPE html>

                <html lang='es'>

                <head>

                    <meta charset='UTF-8'>

                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

                    <title>Resultado del Ingreso</title>

                    <style>

                        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; text-align: center; }

                        .message-box { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 400px; max-width: 90%; }

                        h2 { color: #28a745; margin-bottom: 20px; }

                        p { margin-bottom: 20px; }

                        a { display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none; transition: background-color 0.3s ease; }

                        a:hover { background-color: #0056b3; }

                    </style>

                </head>

                <body>

                    <div class='message-box'>

                        <h2>¡Éxito!</h2>

                        <p>Nuevo libro ingresado correctamente.</p>

                        <a href='sitio.html'>Ingresar otro alumno</a>

                        <a href='consultar_libros.html'>Ver listado</a>

                    </div>

                </body>

                </html>";

    } else {

        echo "<!DOCTYPE html>

                <html lang='es'>

                <head>

                    <meta charset='UTF-8'>

                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

                    <title>Error de Ingreso</title>

                    <style>

                        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; text-align: center; }

                        .message-box { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 400px; max-width: 90%; }

                        h2 { color: #dc3545; margin-bottom: 20px; }

                        p { margin-bottom: 20px; }

                        a { display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none; transition: background-color 0.3s ease; }

                        a:hover { background-color: #0056b3; }

                    </style>

                </head>

                <body>

                    <div class='message-box'>

                        <h2>¡Error!</h2>

                        <p>Error al ingresar el alumno: " . $conn->error . "</p>

                        <a href='sitio.html'>Volver al formulario</a>

                        <a href='consultar_libros.html'>Ver listado</a>

                    </div>

                </body>

                </html>";

    }

}

// Cerrar conexión

$conn->close();

?>
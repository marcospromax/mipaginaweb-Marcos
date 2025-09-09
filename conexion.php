<?php
// Configuración de la base de datos

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "biblioteca - tecnica1";



// Crear conexión

$conn = new mysqli($servername, $username, $password, $dbname);



// Verificar conexión

if ($conn->connect_error) {

    die("Conexión fallida: " . $conn->connect_error);

}



// ejecuta la Consulta SQL para seleccionar todos los alumnos

$sql = "SELECT titulo del libro, autor, editorial, cantidad, materia FROM libros";

$result = $conn->query($sql);



if ($result->num_rows > 0) {

    // Si hay resultados, construir la tabla HTML

    echo "<table>";

    echo "<thead>";

    echo "<tr><th>ID</th><th>titulo del libro</th><th>autor</th><th>editorial</th><th>cantidad</th><th>materia</th></tr>";

    echo "</thead>";

    echo "<tbody>";

    // Recorrer cada fila de resultados y mostrar los datos

    while($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . $row["titulo del libro"] . "</td>";

        echo "<td>" . $row["autor"] . "</td>";

        echo "<td>" . $row["editorial"] . "</td>";

        echo "<td>" . $row["cantidad"] . "</td>";

        echo "<td>" . $row["materia"] . "</td>";

        echo "</tr>";

    }

    echo "</tbody>";

    echo "</table>";

} else {

    

}

// Cerrar conexión

$conn->close();

?>
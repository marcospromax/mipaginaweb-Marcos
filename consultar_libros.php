<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Listado de Alumnos</title>

    <style>

        body {
          /*  Establece una tipografía, colores y una imagen de fondo.

Usa Flexbox para centrar contenido verticalmente.*/


            font-family: Arial, sans-serif;

            background-color: #f4f4f4;

            display: flex;

            flex-direction: column;

            justify-content: flex-start; /* Alinea al inicio */

            align-items: center;

            min-height: 100vh; /*Ocupa como mínimo toda la altura de la pantalla.*/

            margin: 0;

            padding: 20px;

            box-sizing: border-box; /* Incluye padding en el tamaño total */;
            
             background-image: url(https://mapio.net/images-p/22834009.jpg) 


        }

        .container {
            /*Esto define el contenedor blanco con bordes redondeados y sombra*/

            background-color: #fff;

            padding: 20px;

            border-radius: 70px;

            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);

            width: 80%;

            max-width: 900px;

            margin-top: 20px; /* Margen superior para separarlo del borde */

        
        }

        h2 {
           /* Título centrado y con margen inferior.*/

            text-align: center;

            color: #333;

            margin-bottom: 25px;

        }

        table {
            /* aca define como se vera la tabla*/

            width: 100%;

            border-collapse: collapse;

            margin-top: 20px;

        }

        th, td {

            border: 1px solid #ddd;

            padding: 10px;

            text-align: left;

        }

        th {

            background-color: #00bdbd;

            color: white;

        }

        tr:nth-child(even) {

            background-color: #f2f2f2;

        }

        .link-ingreso {
            /*este es el boton que aparece abajo*/

            display: block;

            text-align: center;

            margin-top: 20px;

            color: #007bff;

            text-decoration: none;
            
            background-color:rgb(141, 227, 238);
            
            padding: 10px 30px;
            border-radius: 70px

        }

        .link-ingreso:hover {

            text-decoration: underline;

        }

    </style>

</head>

<body> 

    <div class="container"> 

        <h2>Listado de Alumnos Registrados</h2>

        <?php include 'conexion.php'; ?>

        <a href="sitio.html" class="link-ingreso">Volver al Formulario de Ingreso</a>

    </div>
 
</body>

</html>
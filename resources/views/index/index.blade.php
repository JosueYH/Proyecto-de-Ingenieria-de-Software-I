
@extends('template.layout')
@section('titleGeneral', '')
@section('sectionIndex')

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido al Sistema de Administración</title>
    <link rel="stylesheet" href="ruta/al/estilo/adminlte.css"> <!-- Enlaza el archivo CSS de AdminLTE -->
    <style>
        /* Estilos personalizados para este archivo */
        .mi-contenido {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .mi-titulo {
            color: #333;
            text-align: center;
        }
        .mi-mensaje {
            color: #666;
            text-align: center;
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <!-- Contenido de AdminLTE -->
        <div class="content">
            <div class="container-fluid">
                <!-- Tu contenido personalizado aquí -->
                <div class="mi-contenido">
                    <h1 class="mi-titulo">Bienvenido al Sistema de Conciliación</h1>
                    <p class="mi-mensaje">¡Gracias por utilizar nuestro sistema!</p>
                </div>
            </div>
        </div>
    </div>
    <script src="ruta/al/script/adminlte.js"></script> <!-- Incluye el script de AdminLTE -->
</body>
</html>

@endsection


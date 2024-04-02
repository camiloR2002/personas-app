<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        .links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .links a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .links a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la Página Principal</h1>
        <div class="links">
            <a href="{{ route('comunas.index') }}">Comunas</a>
            <a href="{{ route('departamentos.index') }}">Departamentos</a>
            <a href="{{ route('municipios.index') }}">Municipios</a>
            <a href="{{ route('paises.index') }}">Países</a>
        </div>
    </div>
</body>
</html>




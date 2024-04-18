<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir País</title>
    <!-- Enlaces a tus archivos CSS y JavaScript aquí -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Añadir País</h1>
        <form action="{{ route('paises.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pais_nomb">Nombre del País:</label>
                <input type="text" class="form-control" id="pais_nomb" name="pais_nomb" required>
            </div>
            <div class="form-group">
                <label for="pais_codi">Abreviatura:</label>
                <input type="text" class="form-control" id="pais_codi" name="pais_codi" required>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        ¡Error! El nombre del país o la abreviatura ya existen en la base de datos.
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="pais_capi">Capital:</label>
                <input type="text" class="form-control" id="pais_capi" name="pais_capi" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir País</button>
            <a href="{{ route('paises.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Enlaces a tus archivos JavaScript aquí -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>

</html>

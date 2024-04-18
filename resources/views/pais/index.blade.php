<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de paises</title>
</head>
<div class="container">
    <h1 class="mb-4">Listado de Países</h1>
    <div class="mb-3">
        <a href="{{ route('paises.create') }}" class="btn btn-success btn-sm">Añadir País</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Abreviatura</th>
                    <th scope="col">País</th>
                    <th scope="col">Capital</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paises as $pais)
                    <tr>
                        <td>{{ $pais->pais_codi }}</td>
                        <td>{{ $pais->pais_nomb }}</td>
                        <td>{{ $pais->pais_capi }}</td>
                        <td>
                            <a href="{{ route('paises.edit', ['pais' => $pais->pais_codi]) }}" class="btn btn-info btn-sm">Editar</a>

                            <form action="{{ route('paises.destroy', ['pais' => $pais->pais_codi]) }}" method="POST" style="display: inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este país? Esta acción no se puede deshacer.')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</html>

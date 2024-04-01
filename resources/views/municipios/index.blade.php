<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Municipios</title>
</head>

<body>
    <div>
        <h1>Listado de Municipios</h1>
       <a href="{{ route('comunas.create')}}" class="btn btn-succes">Add</a>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Commune</th>
                    <th scope="col">Municipality</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comunas as $comuna)
                    <tr>
                        <th scope="row">{{ $comuna->comu_codi }}</th>
                        <td>{{ $comuna->comu_nomb }}</td>
                        <td>{{ $comuna->muni_nomb }}</td>
                    <td>
                        <a href="{{route('comunas.edit',['comuna'=>$comuna->comu_codi])}}"
                            class="btn btn-info">Edit</a>
                        <form action="{{ route('comunas.destroy',['comuna => $comuna->comu_codi'])}}"
                            method='POST' style="display: inline-block">
                        @method ('Delete')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
    </div>
    </table>

</body>

</html>
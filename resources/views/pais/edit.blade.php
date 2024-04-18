<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar País</title>
    <!-- Librerías de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Editar País</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="pais_codi" class="form-label">Abreviatura</label>
                        <input type="text" class="form-control" id="pais_codi" name="pais_codi" value="{{ $pais->pais_codi }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="pais_nomb" class="form-label">País</label>
                        <select class="form-select" id="pais_nomb" name="pais_nomb" required onchange="updateCodigo(this)">
                            @foreach($paises as $p)
                                <option value="{{ $p->pais_nomb }}" @if($p->pais_nomb == $pais->pais_nomb) selected @endif>{{ $p->pais_nomb }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pais_capi" class="form-label">Capital</label>
                        <input type="text" class="form-control" id="pais_capi" name="pais_capi" value="{{ $pais->pais_capi }}" required>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a href="{{ route('paises.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Librerías de Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>


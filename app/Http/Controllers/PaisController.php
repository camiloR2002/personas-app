<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all();
        return view('pais.index', ['paises' => $paises]);
    }

    public function create()
{
    $paises = Pais::all(); 
    return view('pais.create', ['paises' => $paises]);
}

public function store(Request $request)
{
    $request->validate([
        'pais_nomb' => 'required',
        'pais_codi' => 'required|unique:tb_pais', 
        'pais_capi' => 'required',
]);


    $pais = new Pais();
    $pais->pais_codi = $request->pais_codi;
    $pais->pais_nomb = $request->pais_nomb;
    $pais->pais_capi = $request->pais_capi;
    $pais->save();

    
    return redirect()->route('paises.index')->with('success', 'País añadido exitosamente.');
}

    public function edit($id)
    {
        $pais = Pais::find($id);
        $paises = DB::table('tb_pais')->orderBy('pais_nomb')->get();
        return view('pais.edit', ['pais' => $pais, 'paises' => $paises]);
    }
    

    public function update(Request $request, $id)
    {
        $pais = Pais::findOrFail($id);
        $pais->pais_codi = $request->pais_codi;
        $pais->pais_nomb = $request->pais_nomb;
        $pais->pais_capi = $request->pais_capi;
        $pais->save();

        return redirect()->route('paises.index');
    }

    public function destroy($id)
    {
        $pais = Pais::findOrFail($id);
        $pais->delete();

        return redirect()->route('paises.index');
    }
}



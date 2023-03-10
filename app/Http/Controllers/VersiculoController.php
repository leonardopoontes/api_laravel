<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Versiculo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Versiculo::create($request->all())) {
            return response()->json([
                'message' => 'Versiculo cadastrado com sucesso'
            ], 201);
        }

        return response()->json([
            'message' => 'Erro ao cadastrar o versiculo'
        ], 404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $versiculo = Versiculo::find($id);
        if ($versiculo) {
            return $versiculo;
        } else
            return response()->json([
                'message' => 'Erro ao exibir o versiculo'
            ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $versiculo = Versiculo::find($id);
        if ($versiculo) {
            $versiculo->update($request->all());
            return $versiculo;
        }
        return response()->json([
            'message' => 'Erro ao atualizar o versiculo'
        ], 404);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Versiculo::destroy($id)) {
            return response()->json([
                'message' => 'Versiculo deletado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao deletar o versiculo'
        ], 404);

    }
}

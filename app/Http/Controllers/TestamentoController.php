<?php

namespace App\Http\Controllers;

use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Testamento::create($request->all())) {
            return response()->json([
                'message' => 'Testamento cadastrado com sucesso'
            ], 201);
        }

    }

    public function show($id)
    {
        $testamento = Testamento::findOrFail($id);
        if ($testamento) {
            return $testamento;
        }
        return response()->json([
           'message' => 'Erro ao exibir o testamento'
        ]);
    }

    public function update(Request $request, $id)
    {
        $testamento = Testamento::find($id);
        if ($testamento) {
            $testamento->update($request->all());

            return $testamento;
        }
        return response()->json([
            'message' => 'Erro ao atualizar o testamento'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Testamento::destroy($id)) {
            return response()->json([
                'message' => 'Testamento deletado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao deletar o Testamento'
        ], 404);

    }
}

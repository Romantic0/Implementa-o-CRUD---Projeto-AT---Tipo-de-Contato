<?php

namespace App\Http\Controllers;

use App\Models\TipoContato;
use Illuminate\Http\Request;

class TipoContatoController extends Controller
{
    public function index()
    {
        $tipos = TipoContato::all();
        return view('tipo_contatos.index', ['tipos' => $tipos]);
    }

    public function create()
    {
        return view('tipo_contatos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        // Corrigido: apenas campos permitidos
        TipoContato::create($request->only(['nome', 'descricao']));

        return redirect()->route('tipo-contatos.index')
                         ->with('success', 'Tipo de contato criado com sucesso!');
    }

    public function show(TipoContato $tipoContato)
    {
        return view('tipo_contatos.show', compact('tipoContato'));
    }

    public function edit(TipoContato $tipoContato)
    {
        return view('tipo_contatos.edit', compact('tipoContato'));
    }

    public function update(Request $request, TipoContato $tipoContato)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        // Corrigido: apenas campos permitidos
        $tipoContato->update($request->only(['nome', 'descricao']));

        return redirect()->route('tipo-contatos.index')
                         ->with('success', 'Tipo de contato atualizado com sucesso!');
    }

    public function destroy(TipoContato $tipoContato)
    {
        $tipoContato->delete();
        return redirect()->route('tipo-contatos.index')
                         ->with('success', 'Tipo de contato excluído com sucesso!');
    }
}

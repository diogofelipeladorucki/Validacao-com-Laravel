<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome'=>'required|min:2|max:100',
            'idade'=>'required',
            'endereco'=>'required',
            'email'=>'required|email|unique:clientes'
        ];

        $mensagens =  [
            'nome.required'=>'O nome deve ser preenchido',
            'nome.min'=>'O nome deve ter no mínimo 2 caracteres',
            'nome.max'=>'O nome deve ter no máximo 100 caracteres',
            'idade.required'=>'A idade deve ser preenchida',
            'endereco.required'=>'O endereço deve ser preenchido',
            'email.required'=>'O email deve ser preenchido',
            'email.email'=>'Email inválido',
            'email.unique'=>'Este email já está cadastrado'
        ];
        
        $request->validate($regras, $mensagens);
        
            // $request->validate([
                //     'nome'=>'required|min:2|max:100',
                //     'idade'=>'required',
                //     'endereco'=>'required',
                //     'email'=>'required|email|unique:clientes'
                
                
            // ]);
                
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

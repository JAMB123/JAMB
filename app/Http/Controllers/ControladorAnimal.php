<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Animal;

class ControladorAnimal extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animal = Animal::all();
        return view ('sistema.novoCadastro', compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sistema.novoCadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request -> file('arquivo')->store('imagens', 'public');
        $data = new Animal () ;
        $data ->  nome = $request -> input ('nome');
        $data -> idade = $request -> input ('idade');
        $data -> especie = $request -> input ('especie');
        $data -> raca = $request -> input ('raca');
        $data -> sexo = $request -> input ('sexo');
        $data -> porte = $request -> input ('porte');
        $data -> sobre = $request -> input ('sobre');
        $data -> arquivo = $path;
        $data -> save();
        return redirect('/cadastros/lista')->with('success', 'Animal cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Animal::find($id);
        if(isset($data)){
            return view('site.editaCadastro', compact('data'));
        }
        return redirect('/cadastros/lista')->with('danger', 'Erro ao editar o cadastro');
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Animal::find($id);
        if(isset($data)){
            $data ->  nome = $request -> input ('nome');
            $data -> idade = $request -> input ('idade');
            $data -> especie = $request -> input ('especie');
            $data -> raca = $request -> input ('raca');
            $data -> sexo = $request -> input ('sexo');
            $data -> porte = $request -> input ('porte');
            $data -> sobre = $request -> input ('sobre');
            $file = $request->file('arquivo');
            if(isset($file)){
                $filename = 'imagens/'.date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('storage/imagens'), $filename);
                $data->arquivo = $filename;
            }
            $data->save();
        }else{
            return redirect('/cadastros/lista')->with('danger', 'Erro ao editar o cadastro');
        }
        return redirect('/cadastros/lista')->with('success', 'Cadastro editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Cadastro::find($id);
        if(isset($data)){
            $arquivo = $data->arquivo;    
            Storage::disk('public')->delete($arquivo);
            $data->delete();
        }else{
            return redirect('/cadastros/lista')->with('danger', 'Erro ao deletar o cadastro');
        }
        return redirect('/cadastros/lista')->with('success', 'Cadastro deletado com sucesso');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;

class Alunos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentheader_title =  "Listagem de Alunos";
        $contentheader_description = "Todos os alunos cadastrados no Sistema Alvorada.";

        return view('alunos.listagem', compact('contentheader_title','contentheader_description'));
       // return "Listagem de todos os alunos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contentheader_title =  "Cadastro de Alunos";
        $contentheader_description = "Cadastro de um novo aluno no Sistema Alvorada.";
        return view('alunos.cadastro', compact('contentheader_title','contentheader_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success(
                        'Caso seja necessário, faça um novo cadastro.', 
                        'Cadastro realizado com sucesso!'
                    )->persistent("Ok");;
        return redirect('/home/alunos/cadastrar');
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

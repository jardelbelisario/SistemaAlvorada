<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;

class Disciplinas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contentheader_title =  "LISTAGEM DE DISCIPLINAS";
        $contentheader_description = "Todas as disciplinas cadastrados no Sistema Alvorada.";

        return view('disciplinas.listagem', compact('contentheader_title','contentheader_description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $contentheader_title =  "CADASTRO DE DISCIPLINA";
        $contentheader_description = "Cadastro de uma nova disciplina no Sistema Alvorada.";
        return view('disciplinas.cadastro', compact('contentheader_title','contentheader_description'));
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
        return redirect('/home/disciplinas/cadastrar');
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

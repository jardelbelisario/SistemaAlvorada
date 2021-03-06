<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;

class Notas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentheader_title =  "LISTAGEM DE NOTAS";
        $contentheader_description = "Todas as notas cadastrados no Sistema Alvorada.";

        //return view('notas.listagem', compact('contentheader_title','contentheader_description'));
        return view('notas.notas-turmas', compact('contentheader_title','contentheader_description'));
       // return "Listagem de todos os notas";
    }

    public function visualizar()
    {
        $contentheader_title =  "LISTAGEM DE NOTAS";
        $contentheader_description = "Todas as notas cadastrados no Sistema Alvorada.";

        return view('notas.notas', compact('contentheader_title','contentheader_description'));
       // return "Listagem de todos os notas";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contentheader_title =  "CADASTRO DE NOTAS";
        $contentheader_description = "Cadastro de uma nova nota no Sistema Alvorada.";
        return view('notas.cadastro', compact('contentheader_title','contentheader_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success( 'Caso seja necessário, faça um novo cadastro.', 
                        'Cadastro realizado com sucesso!'
                    )->persistent("Ok");;
        return redirect('/home/notas/cadastrar');
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

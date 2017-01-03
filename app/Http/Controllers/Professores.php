<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;

class Professores extends Controller
{

    public function index()
    {
        $contentheader_title =  "LISTAGEM DE PROFESSORES";
        $contentheader_description = "Todos os pofessores cadastrados no Sistema Alvorada.";

        return view('professores.listagem', compact('contentheader_title','contentheader_description'));
    }


    public function create()
    {
         $contentheader_title =  "CADASTRO DE PROFESSOR";
        $contentheader_description = "Cadastro de um novo professor no Sistema Alvorada.";
        return view('professores.cadastro', compact('contentheader_title','contentheader_description'));
    }


    public function store(Request $request)
    {
        Alert::success(
                        'Caso seja necessário, faça um novo cadastro.', 
                        'Cadastro realizado com sucesso!'
                    )->persistent("Ok");;
        return redirect('/home/professores/cadastrar');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

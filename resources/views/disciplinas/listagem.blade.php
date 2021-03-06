@extends('app')

@section('htmlheader_title')
    Professores
@endsection

@section('contentheader_description')
  Todos os professores cadastrados no Sistema Alvorada
@endsection

@section('breadcrumb_level_2')
  Alunos
@endsection

@section('breadcrumb_level_1')
  <a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
  Alunos
@endsection




@section('main-content')

<section class="container-wrapper">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Home
        </div>
        <div class="panel-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Turma</th>
                <th style="width: 100px;">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=0; $i < 50; $i++) { ?>
              
              <tr role="row" class="odd">
                <td class="sorting_1">Gecko_<?= $i ?> </td>
                <td>Firefox 1.0s_<?= $i ?></td>
                <td>Win 98+ / OSX.2+_<?= $i ?></td>
                <td>1.7_<?= $i ?></td>
                <td>
                  <div class="btn-group">
                     <a href="/panel/pacientes/listar/pacienteFechaId" type="button" class="btn btn-primary" title="Visualizar Perfil"> <i class="fa  fa-eye"></i></a>
                    <a href="/panel/pacientes/editar/pacienteFechaId" type="button" class="btn btn-success" title="Editar Perfil"> <i class="fa  fa-edit"></i></a>
                    <a href="/panel/pacientes/deletar/pacienteFechaId" type="button" class="btn btn-danger" title="Deletar Perfil"> <i class="fa   fa-close"></i></a>
                  </div>
                </td>
              </tr>
              
              <?php } ?>
            
            </tbody>
            <tfoot>       
             <tr>
               <th rowspan="1" colspan="1">Matrícula</th>
               <th rowspan="1" colspan="1">Nome</th>
               <th rowspan="1" colspan="1">Telefone(s)</th>
               <th rowspan="1" colspan="1">Turma</th>
               <th rowspan="1" colspan="1">Ações</th>
             </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
   </div>
</section>

@endsection

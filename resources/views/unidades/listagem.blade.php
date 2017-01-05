@extends('app')

@section('htmlheader_title')
@section('contentheader_title')
    Unidade
@endsection

@section('contentheader_description')
  Todos das unidades cadastradas no Sistema Alvorada
@endsection

@section('breadcrumb_level_2')
  Unidade
@endsection

@section('breadcrumb_level_1')
  <a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
  Unidade
@endsection


@section('main-content')

<!-- Main content -->
<section class="container-wrapper">
<!-- form start -->
<form action="/home/turmas/cadastrar" method="POST" enctype="multipart/form-data" role="form">
{!! csrf_field() !!}
  <div class="row">
    <div class="col-xs-12 col-md-12">

      <div class="panel panel-default">
        <div class="panel-heading">Home</div>
        <div class="panel-body">
          <div class="col-xs-12 col-md-12"> 
              

              <div class="box-header with-border">
                <h3 class="box-title">
                  <a href="/home/unidade/cadastrar" class="btn btn-default pull-left" >
                    <i class="fa fa-list"></i> Ir para cadastro de Unidade
                  </a>
                </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Unidade</th>
                      <th style="width: 100px;">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for ($i=0; $i < 10; $i++) { ?>
                    
                    <tr role="row" class="odd">
                      <td class="sorting_1">Unidade_<?= $i ?> </td>
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
                     <th rowspan="1" colspan="1">Unidade</th>
                     <th rowspan="1" colspan="1">Ações</th>
                   </tr>
                  </tfoot>
                </table>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

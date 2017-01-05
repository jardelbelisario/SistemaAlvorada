@extends('app')

@section('htmlheader_title')
@section('contentheader_title')
Listagem de turmas
@endsection

@section('breadcrumb_level_1')
<a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
Turmas
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
          <div class="col-xs-12 col-md-6">

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-users"></i>
                  </div>
                <input type="text" name="name" value="" placeholder="Nome" id="exampleInputNome" class="form-control">
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label>Curso</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="id_ubs">
                  <option selected="selected">Selecione um Curso</option>
                  <option value="">opção 1</option>
                  <option value="">opção 1</option>
                  <option value="">opção 1</option>
                  <option value="">opção 1</option>
                </select>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label>Turno</label>

                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"  aria-hidden="true" name="permissao">
                  <option selected="selected">Selecione um Turno</option>
                  <option value="3">opção 1</option>
                  <option value="2">opção 1</option>
                  <option value="1">opção 1</option>
                </select>
              </div>
            </div>

          </div><!-- ./col-xs-12 col-md-6 -->

          <div class="col-xs-12 col-md-6">
            <div class="col-xs-12">
             <div class="form-group">
                <label>Disciplinas da grade desse curso</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Selecione a(s) disciplina(s) dessa turma" style="width: 100%;">
    
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>

             </div>
            </div><!-- /.col-xs-12 -->
          </div><!-- ./col-xs-12 col-md-4 -->

        </div><!-- /.panel-body-->
      </div><!-- /.panel panel-danger-->
    </div><!-- /.col-xs-12 col-md-12-->
    <div class="col-xs-12 12 col-md-12">
      <div class="box-footer">
        <div class="form-group">
          <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
            Enviar Dados
          </button>
        </div>
      </div>
    </div>
  </div><!-- /.row-->
</form>
</section><!-- /.content -->
@endsection

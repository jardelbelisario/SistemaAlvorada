@extends('app')

@section('htmlheader_title')
Disciplinas
@endsection

@section('contentheader_title')
Listagem de disciplinas
@endsection

@section('breadcrumb_level_1')
<a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
disciplinas
@endsection


@section('main-content')

<section class="container-wrapper">
<!-- form start -->
<form action="/home/disciplinas/cadastrar" method="POST" enctype="multipart/form-data" role="form">
{!! csrf_field() !!}
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Home
        </div>
        <div class="panel-body">

          <div class="col-xs-12 col-md-12">

            <div class="col-xs-12 col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-book"></i>
                  </div>
                <input type="text" name="name" value="" placeholder="Nome" id="exampleInputNome" class="form-control">
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-6">
              <div class="form-group">
                <label for="exampleInputTelefone">Carga Horária:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-safari"></i>
                  </div>
                <input type="number" name="telefone" value=""  placeholder="Insira a quantidade de horas" id="exampleInputTelefone" class="form-control">
                </div>
              </div>
            </div>         

          </div><!-- /.col-xs-12 col-md-12 -->

          
        </div><!-- /.panel-body-->
       </div><!-- /.panel-default-->
      </div><!-- /.col-xs-12 col-md-12-->
      <div class="col-xs-12 col-md-12">
        <div class="box-footer">
          <div class="form-group">
            <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
              Enviar Dados
            </button>
          </div>
        </div>
      </div><!-- /.col-xs-12 col-md-12-->
    </div><!-- /.row -->
 </form>

</section><!-- /.content -->
@endsection

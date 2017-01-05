@extends('app')

@section('htmlheader_title')
@section('contentheader_title')
  Cursos
@endsection

@section('breadcrumb_level_1')
<a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
Cursos
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

                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputNome1">Nome do curso:</label>
                    <input type="text" name="name" value="" placeholder="Nome" id="oi1" class="form-control">
                  </div>
                </div>
          </div>
                <div class="col-xs-12 12 col-md-12">
                  <div class="box-footer">
                    <div class="form-group">
                      <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
                        Enviar Dados
                      </button>
                    </div>
                  </div>
                </div>     
        </div>

      </form>

    </div><!-- /.box primary-->

    </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

  </section><!-- /.content -->
@endsection

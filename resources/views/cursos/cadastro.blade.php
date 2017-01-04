@extends('app')

@section('htmlheader_title')
  Turmas
@endsection

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
  <section class="content">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <!-- general form elements -->

        <div class="box box-danger">
          <!-- form start -->
          <form action="/home/turmas/cadastrar" method="POST" enctype="multipart/form-data" role="form">
            {!! csrf_field() !!}
            <div class="box-header with-border">
              <!--  <h3 class="box-title">
                 <a href="/home/alunos/listagem" class="btn btn-default pull-left" >
                   <i class="fa fa-list"></i> Ir para listagem de Alunos
                 </a>
               </h3> -->
              <h3 class="box-title">DADOS DO CURSO</h3>
            </div><!-- /.box-header -->

            <div class="box-body">

              <div class="col-xs-12 col-md-5">

                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputNome1">Nome do curso:</label>
                    <input type="text" name="name" value="" placeholder="Nome" id="oi1" class="form-control">
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="box-footer">
                    <div class="form-group">
                      <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
                        Enviar Dados
                      </button>
                    </div>
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

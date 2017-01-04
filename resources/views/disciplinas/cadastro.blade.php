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

<!-- Main content -->
<section class="container-wrapper">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <!-- general form elements -->
      
      <div class="box box-danger">
        <!-- form start -->
        <form action="/home/disciplinas/cadastrar" method="POST" enctype="multipart/form-data" role="form">
          {!! csrf_field() !!}
          <div class="box-header with-border">
           <!--  <h3 class="box-title">
              <a href="/home/disciplinas/listagem" class="btn btn-default pull-left" >
                <i class="fa fa-list"></i> Ir para listagem de disciplinas
              </a>
            </h3> -->
            <h3 class="box-title">DISCIPLINAS</h3>
            <h3 class="box-title pull-right">
              <a href="/home/disciplinas/listagem" class="btn btn-default pull-left" >
                <i class="fa fa-list"></i> Ir para listagem de disciplinas
              </a>
            </h3>
          </div><!-- /.box-header -->

          <div class="box-body">

            <div class="col-xs-12 col-md-4">

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome:</label>
                  <input type="text" name="name" value="" placeholder="Nome" id="exampleInputNome" class="form-control">
                </div>
              </div>

              

          </div> <!-- ./col-xs-4 -->
        </div><!-- /.box box-danger-->
      </div>
    </div><!-- /.row -->


    <div class="col-xs-12">
      <div class="box-footer">
        <div class="form-group">
          <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
            Enviar Dados
          </button>
        </div>
      </div>
    </div>

  </form>

</div><!-- /.box primary-->

</div><!-- /.col-md-12 --> 
</div><!-- /.row -->


</section><!-- /.content -->
@endsection

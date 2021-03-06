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
<section class="content">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <!-- general form elements -->
      
      <div class="box box-danger">
        <!-- form start -->
        <form name="form-notas" action="" method="POST" enctype="multipart/form-data" role="form">
          {!! csrf_field() !!}
          <div class="box-header with-border">
           <!--  <h3 class="box-title">
              <a href="/home/disciplinas/listagem" class="btn btn-default pull-left" >
                <i class="fa fa-list"></i> Ir para listagem de disciplinas
              </a>
            </h3> -->
            <h3 class="box-title">ESCOLHA A TURMA PARA INSERIR AS NOTAS</h3>
            <h3 class="box-title pull-right">
              <a href="/home/disciplinas/listagem" class="btn btn-default pull-left" >
                <i class="fa fa-list"></i> Ir para listagem de disciplinas
              </a>
            </h3>
          </div><!-- /.box-header -->

          <div class="box-body">

            <div class="col-xs-12 col-md-12">

              <div class="col-xs-12">
                <div class="form-group">
                  <label>Encontre a turma pelo código correspondente</label>
                  <select name="SelectIdTurma" class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true">
                    <option selected="selected">Selecione uma Turma</option>
                    <option value="enf1611ajlb">ENF1611A-JLB</option>
                    <option value="">ENF1621A-AMA</option>
                    <option value="">ENF1613A-AÇL</option>
                    <option value="">ENF1612A-IMP</option>
                  </select>
                </div>
              </div>
          </div> <!-- ./col-xs-4 -->
        </div><!-- /.box box-danger-->
      </div>
    </div><!-- /.row -->


    <div class="col-xs-12">
      <div class="box-footer">
        <div class="form-group">
<!--           <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
            Acessar Turma
          </button> -->
          <input type="submit" value="Acessar Turma" class="btn btn-alvorada btn-block btn-lg">
          <!-- <a href="notas/{{}}/cadastrar" class="btn btn-alvorada btn-block btn-lg"> Acessar Turma</a> -->
        </div>
      </div>
    </div>

  </form>

</div><!-- /.box primary-->

</div><!-- /.col-md-12 --> 
</div><!-- /.row -->


<!-- Modal Chamando a tela Video -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <video id="user-media" class="video-area tamanho-video" autoplay="autoplay" ></video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="takephoto" onClick="snapshot();"  data-dismiss="modal">Salvar Foto</button>
      </div>
    </div>
  </div>
</div>

</section><!-- /.content -->
@endsection

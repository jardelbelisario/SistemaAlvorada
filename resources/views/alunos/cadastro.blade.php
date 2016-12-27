@extends('app')

@section('htmlheader_title')
    Alunos
@endsection

@section('contentheader_title')
	Listagem de alunos
@endsection

@section('breadcrumb_level_1')
	<a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
	Alunos
@endsection


@section('main-content')
<div class="container-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<!-- <div class="panel-heading">Cadastro de dados de aluno e fotografia.</div> -->
				<div class="panel-body">

          <div class="row">
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">

                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.box -->
            </div>
            <div class="col-md-6">
              
            </div>
          </div>
        


  			</div>
      </div>
    </div>
	</div>
</div>
<!-- /.container-wrapper -->
@endsection

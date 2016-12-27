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
				<div class="panel-heading">Alunos</div>
					<div class="panel-body">
						<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Table With Full Features</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
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
		                  <td class="sorting_1">Gecko - <?= $i ?> </td>
		                  <td>Firefox 1.0s - <?= $i ?></td>
		                  <td>Win 98+ / OSX.2+ - <?= $i ?></td>
		                  <td>1.7 - <?= $i ?></td>
		                  <td>A - <?= $i ?></td>
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
        </div>
			</div>
		</div>
	</div>
</div>
@endsection

@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('breadcrumb_level_1')
	<a href="{{ url('home') }}">Home</a>
@endsection

@section('main-content')
<div class="container-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!

					<br><br><br>
					<div id="my-other-element" class="row">
						<div class="col-md-3">
							<button id="btn-success" type="button" class="btn btn-block btn-primary">Primary</button>
						</div>
						<div class="col-md-3">
							<button id="btn-primary" type="button" class="btn btn-block btn-success">Success</button>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-block btn-info">Info</button>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-block btn-warning">Warning</button>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

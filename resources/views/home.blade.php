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
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

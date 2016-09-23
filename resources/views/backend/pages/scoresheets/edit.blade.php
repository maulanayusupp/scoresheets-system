@extends('backend.layouts.app')

@section('title')Scoring
@stop

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ $scoresheet->user->name }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
					<div class="profile_img">
						<div id="crop-avatar">
							<!-- Current avatar -->
							<img class="img-responsive avatar-view" src="{{ asset('backend/images/picture.png') }}" alt="Avatar" title="Change the avatar">
						</div>
					</div>
					<h3>{{ $scoresheet->user->name }}</h3>

					<ul class="list-unstyled user_data">
						<li><a href="#" class="btn btn-danger">Presentation file</a></li>
						<li>City: {{ $scoresheet->user->city }}</li>
						<li>Category: {{ $scoresheet->user->category->name }}</li>
						<li>Area: {{ $scoresheet->user->area }}</li>
						<li>Region: {{ $scoresheet->user->region }}</li>
					</ul>
					<br />
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">

					<div class="profile_title">
						<div class="col-md-6">
							<h2>@yield('title') - {{ $scoresheet->user->name }}</h2>
						</div>
					</div>
					<div class="x_content">
						<!-- start form for validation -->
						{!! Form::model($scoresheet, ['route' => ['scoresheets.update', $scoresheet],'method' =>'put','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
		        			{!! csrf_field() !!}
							@include('backend.pages.scoresheets._form')
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
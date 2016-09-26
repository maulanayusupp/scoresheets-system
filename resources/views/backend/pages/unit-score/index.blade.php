@extends('backend.layouts.app')

@section('title')Unit Score
@stop

@section('content')

<!-- page content -->
<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_content">
				<!-- start form for validation -->
				{!! Form::open( ['url' =>'unit-score','method' =>'get','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
					<div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
					    <label class="control-label col-md-2">Best Unit Category</label>
					    <div class="col-md-6">
					        {!!Form::select('q', [''=>'']+App\UnitCategory::pluck('name','id')->all(), null, ['onchange'=>'this.form.submit()','class'=>'select2_single form-control']) !!}
					    </div>
					    @if($errors->has('q'))
					        <span class="help-block">
					            <strong>{{ $errors->first('q') }}</strong>
					        </span>
					    @endif
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php $no = 1; ?>
				@foreach($topCategory as $top)
					<div class="animated flipInY col-lg-4">
						<div class="tile-stats">
							<center>
								<h5>
									<i class="fa fa-trophy"></i> {{ $no++ }}
									<br>
									{{ $top->unitCategory->name }}
									<br>
									{{ $top->type }}
									<br>
									Area {{ $top->area }}
									<br>
									{{ $top->total_score }}
								</h5>
							</center>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>WALK IN</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="animated flipInY col-lg-12">
					<div class="tile-stats">
						<center>								
								<h1>{{ $walkInWinnerName . ' IS THE WALK IN WINNER - ' . $walkInWinnerResultValue . '% COEFFICIENT'}}</h1>
						</center>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th width="40%">Category</th>
							<th>AREA 1</th>
							<th>AREA 2</th>
							<th>AREA 3</th>
							<th>AREA 4</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="red"><font color="white">BEST GRAPARI 30%</font></th>
							<td>{{ $nilaiCategori1[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori1[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori1[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori1[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST SERVICE DIFFERENTIATION CE ACROSS CHANNEL 20%</font></th>
							<td>{{ $nilaiCategori2[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori2[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori2[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori2[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST GRAPARI MITRA 30%</font></th>
							<td>{{ $nilaiCategori3[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori3[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori3[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori3[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST FRONT OFFICE SUPPORT 10%</font></th>
							<td>{{ $nilaiCategori4[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori4[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori4[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori4[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST BACK END SUPPORT 10%</font></th>
							<td>{{ $nilaiCategori5[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori5[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori5[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori5[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>CALL CENTER</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="animated flipInY col-lg-12">
					<div class="tile-stats">
						<center>								
								<h1>{{ $callCenterWinnerName . ' IS THE CALL CENTER WINNER - ' . $callCenterWinnerResultValue . '% COEFFICIENT'}}</h1>
						</center>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th width="40%">Category</th>
							<th>AREA 1</th>
							<th>AREA 2</th>
							<th>AREA 3</th>
							<th>AREA 4</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="red"><font color="white">BEST CALL CENTER OUTBOUND 30%</font></th>
							<td>{{ $nilaiCategori6[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori6[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori6[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori6[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST CALL CENTER INBOUND 40%</font></th>
							<td>{{ $nilaiCategori7[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori7[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori7[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori7[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST COMPLAINT HANDLING 15%</font></th>
							<td>{{ $nilaiCategori8[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori8[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori8[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori8[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST TRAINER 15%</font></th>
							<td>{{ $nilaiCategori9[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori9[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori9[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori9[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>BEST AREA</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="animated flipInY col-lg-12">
					<div class="tile-stats">
						<center>								
								<h1>{{ $bestAreaWinnerName . ' IS THE BEST AREA WINNER - ' . $bestAreaWinnerResultValue . '% COEFFICIENT'}}</h1>
						</center>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th width="40%">Category</th>
							<th>BOBOT</th>
							<th>AREA 1</th>
							<th>AREA 2</th>
							<th>AREA 3</th>
							<th>AREA 4</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="red"><font color="white">BEST GRAPARI</font></th>
							<td rowspan="5"><center>70%</center></td>
							<td>{{ $nilaiCategori1[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori1[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori1[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori1[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST SERVICE DIFFERENTIATION CE ACROSS CHANNEL</font></th>
							<td>{{ $nilaiCategori2[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori2[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori2[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori2[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST GRAPARI MITRA</font></th>
							<td>{{ $nilaiCategori3[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori3[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori3[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori3[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST CALL CENTER OUTBOUND</font></th>
							<td>{{ $nilaiCategori6[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori6[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori6[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori6[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST CALL CENTER INBOUND</font></th>
							<td>{{ $nilaiCategori7[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori7[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori7[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori7[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>


						<tr>
							<th class="red"><font color="white">BEST FRONT OFFICE SUPPORT</font></th>
							<td rowspan="3"><center>15%</center></td>
							<td>{{ $nilaiCategori4[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori4[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori4[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori4[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST COMPLAINT HANDLING</font></th>
							<td>{{ $nilaiCategori8[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori8[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori8[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori8[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">BEST TRAINER</font></th>
							<td>{{ $nilaiCategori9[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori9[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori9[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori9[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>

						<tr>
							<th class="red"><font color="white">BEST BACK END SUPPORT</font></th>
							<td><center>10%</center></td>
							<td>{{ $nilaiCategori5[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori5[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori5[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori5[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">BEST BILLING COLLECTION</font></th>
							<td><center>5%</center></td>
							<td>{{ $nilaiCategori10[0]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori10[1]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori10[2]==1 ? 'JUARA 1' : ''}}</td>
							<td>{{ $nilaiCategori10[3]==1 ? 'JUARA 1' : ''}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>List all unit score</h2>
				<a href="{{ url('unit-score/create') }}" class="btn btn-primary pull-right"> New unit</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Category</th>
							<th>Type</th>
							<th>Area</th>
							<th>Location</th>
							<th>Score</th>
							<th width="30%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($unitScore as $unit)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $unit->unitCategory->name }}</td>
							<td>{{ $unit->type }}</td>
							<td>{{ $unit->area }}</td>
							<td>{{ $unit->location }}</td>
							<td>{{ $unit->total_score }}</td>
							<td>
								<center>
									{!! Form::model($unit, ['route' => ['unit-score.destroy', $unit], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('unit-score.edit', encrypt($unit->id))}}" class="btn btn-warning">Edit Score</a> | 
	                                <button type="submit" class="btn btn-danger js-submit-confirm">Delete</button>
	                                {!! Form::close()!!}
									
								</center>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

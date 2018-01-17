@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="/path/to/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
@endsection

@section('content')

<div class="col-sm-12">
	
	{{-- Form::open(['route'=>'post.createCita', 'method' => 'POST']) --}}
	
	    <div class="container">
	    	<div class="row">
			    <div class="col-sm-4">
				    <label for="">Fecha de la Consulta:</label>
				    {!! Form::date('cita', null, ['class' => 'form-control']) !!}
			    </div>
			    <div class="col-sm-4">
				    <label for="">Hora Inicial:</label>
				    {!! Form::time('cita', null, ['class' => 'form-control']) !!}
				</div>
				<div class="col-sm-4">
				    <label for="">Hora Final:</label>
				    {!! Form::time('cita', null, ['class' => 'form-control']) !!}
			    </div>
			    <div class="col-sm-12">
				    <label for="">Consultorio:</label>
				    {!! Form::text('cita', null, ['class' => 'form-control']) !!}
			    </div>
				<div class="col-sm-12">
				    <label for="">Paciente:</label>
				    {!! Form::text('cita', null, ['class' => 'form-control']) !!}
			    </div>
			    <div class="col-sm-12">
				    <label for="">Nota:</label>
				    {!! Form::textarea('cita', null, ['class' => 'form-control']) !!}
			    </div>
			    

	    	</div>
	    </div>
    {{-- Form::close() --}}
</div>
@endsection
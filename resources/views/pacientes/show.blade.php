@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h1 class="margintop0">Expediente</h1>
            </div>
            <div class="col-sm-7">
                <h4 class="text-center">Sistema Integral de Administración y Control de Expedientes</h4>
            </div>
            <div class="col-sm-3">
                <h2 class="margintop0">Clinic Card</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <img src="{{ asset('img/simbolo.jpg') }}" width="80%">
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group row">
                            {!! Form::label('nombre', 'Nombre:', ['class' => 'col-sm-2 text-right']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('nombre',  $paciente->nombre." ".$paciente->paterno." ".$paciente->materno, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'readonly', 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group row">
                            {!! Form::label('edad', 'Edad:', ['class' => 'col-sm-2 text-right']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('edad', $paciente->fechaNacimiento, ['class' => 'form-control', 'placeholder' => 'Edad', 'readonly', 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group row">
                            {!! Form::label('ocupacion', 'Ocupación:', ['class' => 'col-sm-3']) !!}
                            <div class="col-sm-8 paddingtopr">
                                {!! Form::select('ocupacion', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control input-sm', 'placeholder' => 'Ocupación', 'readonly', 'required']) !!}
                            </div>
                            <div class="col-sm-1 boton">
                                <button type="button" class="btn btn-sm btn-info">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group row">
                            {!! Form::label('estadoCivil', 'Estado civil:', ['class' => 'col-sm-4 text-right']) !!}
                            <div class="col-sm-8">
                                {!! Form::select('estadoCivil', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control input-sm', 'placeholder' => 'Estado CIvil', 'readonly', 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group row">
                            {!! Form::label('religion', 'Religión:', ['class' => 'col-sm-3 text-right']) !!}
                            <div class="col-sm-8">
                                {!! Form::select('religion', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control input-sm', 'placeholder' => 'Religión', 'readonly', 'required']) !!}
                            </div>
                            <div class="col-sm-1 boton">
                                <button type="button" class="btn btn-sm btn-info">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group row">
                            {!! Form::label('tiposanguineo', 'Tipo sanguíneo:', ['class' => 'col-sm-5']) !!}
                            <div class="col-sm-6">
                                {!! Form::select('tiposanguineo', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control input-sm paddingtopr', 'placeholder' => 'Tipo sanguíneo', 'readonly', 'required']) !!}
                            </div>
                            <div class="col-sm-1 boton">
                                <button type="button" class="btn btn-sm btn-info">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group row">
                            {!! Form::label('residencia', 'Residencia:', ['class' => 'col-sm-3 text-right']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('residencia',  $paciente->direccion, ['class' => 'form-control input-sm', 'placeholder' => 'Residencia', 'readonly', 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group row">
                            {!! Form::label('sexo', 'Sexo:', ['class' => 'col-sm-2 text-right']) !!}
                            <div class="col-sm-10 paddingtopr">
                                {!! Form::select('sexo', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control input-sm', 'placeholder' => 'Sexo', 'readonly', 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <fieldset>
                        <legend class="margintop0">Quién lo recomienda con el doctor:</legend>
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-sm-7">
                                {!! Form::text('sexo', "Su mamá.", ['class' => 'form-control input-sm', 'placeholder' => 'Sexo', 'readonly', 'required']) !!}
                            </div>
                            <div class="col-sm-5">
                                {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control input-sm', 'placeholder' => 'Selecciona un nivel...', 'readonly', 'required']) !!}
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                
            </div>
        </div>
        
        <br>
        <div class="row">
            <div class="col-sm-2">
                <img src="{{ asset('img/expediente.jpg') }}" width="80%">
                <p>Expediente digitalizado</p>
                <div class="row">
                    <div class="col-sm-4">No B</div>
                    <div class="col-sm-8">
                        {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Si', 'required']) !!}
                    </div>
                </div>
                <div class="clearfix"></div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-info center-block"><img src="{{ asset('img/expediente.jpg') }}" width="10px"><br>Registrar</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-10">
                @include("pacientes.detalle")
            </div>
            
        </div>

    </div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#citashist').DataTable({
            "pagingType": "full_numbers",
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            "columns": [
                { "data": "fecha|"},
                { "data": "hora"},
                { "data": "nota"}
            ]
        });
    });
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
{{--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>--}}
@endsection
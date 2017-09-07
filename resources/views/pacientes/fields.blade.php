<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paterno', 'Paterno:') !!}
    {!! Form::text('paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materno', 'Materno:') !!}
    {!! Form::text('materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino'], null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    {!! Form::date('fechaNacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'Rfc:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Idocupacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idOcupacion', 'Idocupacion:') !!}
    {!! Form::select('idOcupacion', ['1' => '1', '2' => '2'], null, ['class' => 'form-control']) !!}
</div>

<!-- Idreligion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idReligion', 'Idreligion:') !!}
    {!! Form::select('idReligion', ['1' => '1', '2' => '2'], null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pacientes.index') !!}" class="btn btn-default">Cancel</a>
</div>

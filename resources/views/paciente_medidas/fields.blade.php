<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Peso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peso', 'Peso:') !!}
    {!! Form::text('peso', null, ['class' => 'form-control']) !!}
</div>

<!-- Cuello Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cuello', 'Cuello:') !!}
    {!! Form::text('cuello', null, ['class' => 'form-control']) !!}
</div>

<!-- Pecho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pecho', 'Pecho:') !!}
    {!! Form::text('pecho', null, ['class' => 'form-control']) !!}
</div>

<!-- Ca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ca', 'Ca:') !!}
    {!! Form::text('ca', null, ['class' => 'form-control']) !!}
</div>

<!-- Cm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cm', 'Cm:') !!}
    {!! Form::text('cm', null, ['class' => 'form-control']) !!}
</div>

<!-- Cb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cb', 'Cb:') !!}
    {!! Form::text('cb', null, ['class' => 'form-control']) !!}
</div>

<!-- Cadera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cadera', 'Cadera:') !!}
    {!! Form::text('cadera', null, ['class' => 'form-control']) !!}
</div>

<!-- Muslo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('muslo', 'Muslo:') !!}
    {!! Form::text('muslo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pantorrilla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pantorrilla', 'Pantorrilla:') !!}
    {!! Form::text('pantorrilla', null, ['class' => 'form-control']) !!}
</div>

<!-- Tobillo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tobillo', 'Tobillo:') !!}
    {!! Form::text('tobillo', null, ['class' => 'form-control']) !!}
</div>

<!-- Brazo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brazo', 'Brazo:') !!}
    {!! Form::text('brazo', null, ['class' => 'form-control']) !!}
</div>

<!-- Munieca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('munieca', 'Munieca:') !!}
    {!! Form::text('munieca', null, ['class' => 'form-control']) !!}
</div>

<!-- Talla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('talla', 'Talla:') !!}
    {!! Form::text('talla', null, ['class' => 'form-control']) !!}
</div>

<!-- Imc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imc', 'Imc:') !!}
    {!! Form::text('imc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pacienteMedidas.index') !!}" class="btn btn-default">Cancel</a>
</div>

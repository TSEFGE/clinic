@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Paciente Medidas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pacienteMedidas, ['route' => ['pacienteMedidas.update', $pacienteMedidas->id], 'method' => 'patch']) !!}

                        @include('paciente_medidas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
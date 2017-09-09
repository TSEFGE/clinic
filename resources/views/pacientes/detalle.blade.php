<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#citas" role="tab">Historial de Citas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"  data-toggle="tab" href="#heredofam" role="tab">Heredofamiliares</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"  data-toggle="tab" href="#nopatologicos" role="tab">No Patològicos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link "  data-toggle="tab" href="#patologicos" role="tab">Patològicos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link "  data-toggle="tab" href="#mujer" role="tab">Mujer</a>
    </li>
    <li class="nav-item">
        <a class="nav-link "  data-toggle="tab" href="#hombre" role="tab">Hombre</a>
    </li>
    <li class="nav-item">
        <a class="nav-link "  data-toggle="tab" href="#infante" role="tab">Infante</a>
    </li>
    <li class="nav-item">
        <a class="nav-link "  data-toggle="tab" href="#complentos" role="tab">Complementarios</a>
    </li>
    <li class="nav-item">
        <a class="nav-link "  data-toggle="tab" href="#pesomedidas" role="tab">Peso y Medidas</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="citas" role="tabpanel">
        <!--incluir tabla de citas-->

    </div>
    <div class="tab-pane" id="heredofam" role="tabpanel">
        <div class="form-group col-sm-2">
            {!! Form::label('vidamama', 'Mamá Viva:') !!}
            {!! Form::select('vidamama', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('padecimientomama', 'Padecimiento:') !!}
            {!! Form::text('padecimientomama', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('vidapapa', 'Papá Vivo:') !!}
            {!! Form::select('vidapapa', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('padecimientopapa', 'Padecimiento:') !!}
            {!! Form::text('padecimientopapa', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group col-sm-2">
            {!! Form::label('vidaabuelama', 'Abuela Materna Viva:') !!}
            {!! Form::select('vidaabuelama', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('padecimientoabuelama', 'Padecimiento:') !!}
            {!! Form::text('padecimientoabuelama', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('vidaabueloma', 'Abuelo Materno Vivo:') !!}
            {!! Form::select('vidaabueloma', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('padecimientoabueloma', 'Padecimiento:') !!}
            {!! Form::text('padecimientoabueloma', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('vidaabuelapa', 'Abuela Paterna Viva:') !!}
            {!! Form::select('vidaabuelapa', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('padecimientoabuelapa', 'Padecimiento:') !!}
            {!! Form::text('padecimientoabuelapa', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('vidaabuelopa', 'Abuelo Paterno Vivo:') !!}
            {!! Form::select('vidaabuelopa', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('padecimientoabuelopa', 'Padecimiento:') !!}
            {!! Form::text('padecimientoabuelopa', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="tab-pane" id="nopatologicos" role="tabpanel">
        <div class="form-group col-sm-2">
            {!! Form::label('toxicomanias', 'Toxicomanias:') !!}
            {!! Form::select('toxicomanias', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('descripciontoxico', 'Descripción:') !!}
            {!! Form::text('descripciontoxico', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('alcohol', 'Alcohol:') !!}
            {!! Form::select('alcohol', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-8">
            {!! Form::label('alcoholfrecuencia', 'Frecuencia:') !!}
            {!! Form::text('alcoholfrecuencia', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-2">
            {!! Form::label('alcoholcantidad', 'Cantidad:') !!}
            {!! Form::text('alcoholcantidad', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('tabaco', 'Tabaco:') !!}
            {!! Form::select('tabaco', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-8">
            {!! Form::label('tabacofrecuencia', 'Frecuencia:') !!}
            {!! Form::text('tabacofrecuencia', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-2">
            {!! Form::label('tabacocantidad', 'Cantidad:') !!}
            {!! Form::text('tabacocantidad', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-6">
            {!! Form::label('habitosalimenticios', 'Habitos Alimenticios:') !!}
            {!! Form::text('habitosalimenticios', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-3">
            {!! Form::label('habitosalimenticioscantidad', 'Cantidad:') !!}
            {!! Form::text('habitosalimenticioscantidad', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-3">
            {!! Form::label('habitosalimenticioscalidad', 'Calidad:') !!}
            {!! Form::text('habitosalimenticioscalidad', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('vivienda', 'Vivienda:') !!}
        </div>
        
        <div class="form-group col-sm-1">
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('serviciosurbanos', 'Servicios Urbanos Completos:') !!}
            {!! Form::select('serviciosurbanos', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-7">
            {!! Form::label('zoonosis', 'Zoonosis:') !!}
            {!! Form::text('zoonosis', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-6">
            {!! Form::label('horasdescanso', 'Descansa al dormir(hrs.):') !!}
            {!! Form::text('horasdescanso', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('insomnio', 'Insomnio:') !!}
            {!! Form::select('insomnio', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('actividadfisica', 'Actividad Fisica:') !!}
            {!! Form::select('actividadfisica', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-8">
            {!! Form::label('deporte', 'Deporte:') !!}
            {!! Form::text('deporte', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-2">
            {!! Form::label('deportehoras', 'Horas:') !!}
            {!! Form::text('deportehoras', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('homeopatia', 'Homeopatía:') !!}
            {!! Form::select('homeopatia', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('usohomeopatia', 'Para que la uso la última vez:') !!}
            {!! Form::text('usohomeopatia', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('acupuntura', 'Acupuntura:') !!}
            {!! Form::select('acupuntura', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('usoacupuntura', 'Para que la uso la última vez:') !!}
            {!! Form::text('usoacupuntura', null, ['class' => 'form-control']) !!}
        </div>
        
    </div>
    <div class="tab-pane" id="patologicos" role="tabpanel">
        <div class="form-group col-sm-12">
            {!! Form::label('enfermedadesinfancia', 'Enfermedades de la infancia:') !!}
            {!! Form::text('enfermedadesinfancia', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('quirurgicos', 'Quirurgicos:') !!}
            {!! Form::text('quirurgicos', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group col-sm-12">
            {!! Form::label('traumatologicos', 'Traumatológicos:') !!}
            {!! Form::text('traumatologicos', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group col-sm-12">
            {!! Form::label('transfusiones', 'Transfusiones:') !!}
            {!! Form::text('transfusiones', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('alergiasalimentos', 'Alergias a alimentos:') !!}
            {!! Form::select('alergiasalimentos', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('cualalergiasalimentos', 'Cual:') !!}
            {!! Form::text('cualalergiasalimentos', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-2">
            {!! Form::label('alergiasmedicamentos', 'Alergias a Medicamentos:') !!}
            {!! Form::select('alergiasmedicamentos', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-10">
            {!! Form::label('cualalergiasmedicamentros', 'Cual:') !!}
            {!! Form::text('cualalergiasmedicamentros', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="tab-pane" id="mujer" role="tabpanel">
        <div class="form-group col-sm-4">
            {!! Form::label('menerca', 'Menerca:') !!}
            {!! Form::text('menerca', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('ritmo', 'Ritmo:') !!}
            {!! Form::text('ritmo', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('caractmestruales', 'Caracteristicas Mestruales:') !!}
            {!! Form::text('caractmestruales', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('ivsa', 'Ivsa:') !!}
            {!! Form::text('ivsa', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('gestas', 'Gestas:') !!}
            {!! Form::text('gestas', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('cesarea', 'Cesarea:') !!}
            {!! Form::text('cesarea', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('para', 'Para:') !!}
            {!! Form::text('para', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('aborto', 'Aborto:') !!}
            {!! Form::text('aborto', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('ultimagesta', 'Ultima Gesta:') !!}
            {!! Form::text('ultimagesta', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('patologiamamaria', 'Alguna Patología Mamaria:') !!}
            {!! Form::text('patologiamamaria', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('patologiacervical', 'Alguna Patología Cervical:') !!}
            {!! Form::text('patologiacervical', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('ultimopapanicolao', 'Ultimo Papanicolao:') !!}
            {!! Form::text('ultimopapanicolao', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('ultimamastografia', 'Ultima Mastografía:') !!}
            {!! Form::text('ultimamastografia', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('menopausia', 'Menopausia:') !!}
            {!! Form::text('menopausia', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('metodoplanfamiliar', 'Método de Planificación Familiar:') !!}
            {!! Form::text('metodoplanfamiliar', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('tiempouso', 'Tiempo de Uso:') !!}
            {!! Form::text('tiempouso', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="tab-pane" id="hombre" role="tabpanel">

    </div>
    <div class="tab-pane" id="infante" role="tabpanel">

    </div>
    <div class="tab-pane" id="complementos" role="tabpanel">

    </div>
    <div class="tab-pane" id="pesomedidas" role="tabpanel">
        
    </div>
</div>
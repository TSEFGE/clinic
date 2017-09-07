<table class="table table-responsive" id="pacienteMedidas-table">
    <thead>
        <th>Idpaciente</th>
        <th>Fecha</th>
        <th>Peso</th>
        <th>Cuello</th>
        <th>Pecho</th>
        <th>Ca</th>
        <th>Cm</th>
        <th>Cb</th>
        <th>Cadera</th>
        <th>Muslo</th>
        <th>Pantorrilla</th>
        <th>Tobillo</th>
        <th>Brazo</th>
        <th>Munieca</th>
        <th>Talla</th>
        <th>Imc</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pacienteMedidas as $pacienteMedidas)
        <tr>
            <td>{!! $pacienteMedidas->idPaciente !!}</td>
            <td>{!! $pacienteMedidas->fecha !!}</td>
            <td>{!! $pacienteMedidas->peso !!}</td>
            <td>{!! $pacienteMedidas->cuello !!}</td>
            <td>{!! $pacienteMedidas->pecho !!}</td>
            <td>{!! $pacienteMedidas->ca !!}</td>
            <td>{!! $pacienteMedidas->cm !!}</td>
            <td>{!! $pacienteMedidas->cb !!}</td>
            <td>{!! $pacienteMedidas->cadera !!}</td>
            <td>{!! $pacienteMedidas->muslo !!}</td>
            <td>{!! $pacienteMedidas->pantorrilla !!}</td>
            <td>{!! $pacienteMedidas->tobillo !!}</td>
            <td>{!! $pacienteMedidas->brazo !!}</td>
            <td>{!! $pacienteMedidas->munieca !!}</td>
            <td>{!! $pacienteMedidas->talla !!}</td>
            <td>{!! $pacienteMedidas->imc !!}</td>
            <td>
                {!! Form::open(['route' => ['pacienteMedidas.destroy', $pacienteMedidas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pacienteMedidas.show', [$pacienteMedidas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pacienteMedidas.edit', [$pacienteMedidas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<td width="10px">
@can('matriculas.show')
        <a href="{{route('matriculas.show', $matricula->id)}}"
           class ="btn btn-sm btn-primary"><i class='fa fa-eye'></i>
            Ver
        </a>
@endcan
</td>
<td width="10px">

@can('matriculas.edit')
        <a href="{{route('matriculas.edit', $matricula->id)}}"
           class ="btn btn-sm btn-success"><i class='fas fa-pencil-alt'></i>
            Editar
        </a>
@endcan
</td>
<td width="10px">

@can('matriculas.destroy')
        {!! Form::open(['route'=> ['matriculas.destroy',$matricula->id],
        'method'=>'DELETE']) !!}
        <button class ="btn btn-sm btn-danger"><i class='fa fa-trash'></i>
            Eliminar
        </button>
        {!! Form::close() !!}
@endcan
</td>
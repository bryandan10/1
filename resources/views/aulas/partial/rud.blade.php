<td width="10px">
@can('aulas.show')
        <a href="{{route('aulas.show', $aula->id)}}"
           class ="btn btn-sm btn-primary"><i class='fa fa-eye'></i>
            Ver
        </a>
@endcan
</td>
<td width="10px">

@can('aulas.edit')
        <a href="{{route('aulas.edit', $aula->id)}}"
           class ="btn btn-sm btn-success"><i class='fas fa-pencil-alt'></i>
            Editar
        </a>
@endcan
</td>
<td width="10px">

@can('aulas.destroy')
        {!! Form::open(['route'=> ['aulas.destroy',$aula->id],
        'method'=>'DELETE']) !!}
        <button class ="btn btn-sm btn-danger"><i class='fa fa-trash'></i>
            Eliminar
        </button>
        {!! Form::close() !!}
@endcan
</td>
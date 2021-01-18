<td width="10px">
@can('profesores.show')
        <a href="{{route('profesores.show', $profesor->id)}}"
           class ="btn btn-sm btn-primary"><i class='fa fa-eye'></i>
            Ver
        </a>
@endcan
</td>
<td width="10px">

@can('profesores.edit')
        <a href="{{route('profesores.edit', $profesor->id)}}"
           class ="btn btn-sm btn-success"><i class='fas fa-pencil-alt'></i>
            Editar
        </a>
@endcan
</td>
<td width="10px">

@can('profesores.destroy')
        {!! Form::open(['route'=> ['profesores.destroy',$profesor->id],
        'method'=>'DELETE']) !!}
        @csrf
        <button class ="btn btn-sm btn-danger"><i class='fa fa-trash'></i>
            Eliminar
        </button>
        {!! Form::close() !!}
@endcan
</td>
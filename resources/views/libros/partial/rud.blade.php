<td width="10px">
@can('libros.show')
        <a href="{{route('libros.show', $libro->id)}}"
           class ="btn btn-sm btn-primary"><i class='fa fa-eye'></i>
            Ver
        </a>
@endcan
</td>
<td width="10px">

@can('libros.edit')
        <a href="{{route('libros.edit', $libro->id)}}"
           class ="btn btn-sm btn-success"><i class='fas fa-pencil-alt'></i>
            Editar
        </a>
@endcan
</td>
<td width="10px">

@can('libros.destroy')
        {!! Form::open(['route'=> ['libros.destroy',$libro->id],
        'method'=>'DELETE']) !!}
        @csrf
        <button class ="btn btn-sm btn-danger"><i class='fa fa-trash'></i>
            Eliminar
        </button>
        {!! Form::close() !!}
@endcan
</td>
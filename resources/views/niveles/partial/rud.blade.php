<td width="10px">
@can('niveles.show')
        <a href="{{route('niveles.show', $nivel->id)}}"
           class ="btn btn-sm btn-primary"><i class='fa fa-eye'></i>
            Ver
        </a>
@endcan
</td>
<td width="10px">

@can('niveles.edit')
        <a href="{{route('niveles.edit', $nivel->id)}}"
           class ="btn btn-sm btn-success"><i class='fas fa-pencil-alt'></i>
            Editar
        </a>
@endcan
</td>
<td width="10px">

@can('niveles.destroy')
        {!! Form::open(['route'=> ['niveles.destroy',$nivel->id],
        'method'=>'DELETE']) !!}
        <button class ="btn btn-sm btn-danger"><i class='fa fa-trash'></i>
            Eliminar
        </button>
        {!! Form::close() !!}
@endcan
</td>
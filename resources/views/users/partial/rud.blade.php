<td width="10px">
    @can('users.show')
        <a href="{{route('users.show', $user->id)}}"
           class ="btn btn-sm btn-primary">
            Ver
        </a>
    @endcan
</td>
<td width="10px">
    @can('users.edit')
        <a href="{{route('users.edit', $user->id)}}"
           class ="btn btn-sm btn-success">
            Editar
        </a>
    @endcan
</td>
<td width="10px">
    @can('users.destroy')
        {!! Form::open(['route'=> ['users.destroy',$user->id],
        'method'=>'DELETE']) !!}
        <button class ="btn btn-sm btn-danger">
            Eliminar
        </button>
        {!! Form::close() !!}
    @endcan
</td>
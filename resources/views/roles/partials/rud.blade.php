<td width="10px">
   @can('roles.show')
   <a href="{{ route('roles.show', $role->id) }}" 
      class="btn btn-sm btn-primary">
   Ver
   </a>
   @endcan
</td>
<td width="10px">
   @can('roles.edit')
   <a href="{{ route('roles.edit', $role->id) }}" 
      class="btn btn-sm btn-success">
   Editar
   </a>
   @endcan
</td>
<td width="10px">
   @can('roles.destroy')
   {!! Form::open(['route' => ['roles.destroy', $role->id], 
   'method' => 'DELETE']) !!}
   <button class="btn btn-sm btn-danger">
   Eliminar
   </button>
   {!! Form::close() !!}
   @endcan
</td>
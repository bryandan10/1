<td width="10px">
@can('progresos.edit')
        <a href="{{route('progresos.edit', $user->id)}}"
           class ="btn btn-sm btn-success"><i class='fas fa-pencil-alt'></i>
           Registrar Progreso
        </a>
@endcan
</td>
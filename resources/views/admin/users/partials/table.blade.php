<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Acciones</th>
    </tr>
    @foreach ($users as $user)
        <tr data-id="{{$user->id}}"> <!--sirve para almacenar el id del usuario en la fila -->
            <td>{{$user->id}}</td>
            <td>{{$user->full_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->rol}}</td>
            <td><a href="{{route('admin.users.edit', $user->id)}}">Editar</a>
               <!-- #! significa-->
                <a href="#!" class="btn-delete">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>
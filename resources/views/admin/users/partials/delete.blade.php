{!! Form::model($user,['route' => ['admin.users.destroy',$user->id],'method'=>'DELETE']) !!}
    <!-- delete Form Input -->
    <div class="form-group">
        {!!  Form::submit('Eliminar Usuario',['class'=>'btn btn-danger'])!!}
    </div>
{!! Form::close() !!}
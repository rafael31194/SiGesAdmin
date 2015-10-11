
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar de Usuario: {{ $user->full_name}}</div>

                    @include('admin.users.partials.messages')

                    <div class="panel-body">
                        {!! Form::model($user,['route' => ['admin.users.update', $user->id],'method'=>'PUT']) !!}
                        @include('admin.users.partials.fields')
                            <div class="form-group">
                                {!!  Form::submit('Actualizar Usuario',['class'=>'btn btn-info'])!!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.users.partials.delete')

            </div>
        </div>
    </div>
@endsection

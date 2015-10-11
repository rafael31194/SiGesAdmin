@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de Usuario</div>

                    <div class="panel-body">

                        @include('admin.users.partials.messages')

                        {!! Form::open(['route' => 'admin.users.store','method'=>'POST']) !!}


                        @include('admin.users.partials.fields')

                        <div class="form-group">
                                {!!  Form::submit('Registrar',['class'=>'btn btn-info'])!!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

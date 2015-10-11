
@extends('app')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>

                    @if(Session::has('message'))

                        <p class="alert alert-success">{{Session::get('message')}}</p>

                    @endif

                    <div class="panel-body">
                            {!! Form::open(['route' => ['admin.users.index'],'method'=>'GET','class' => 'navbar-form navbar-left pull-right','role' => 'search']) !!}
                                <!-- name Form Input -->
                                <div class="form-group">
                                    {!!  Form::text('name', null ,['class'=>'form-control','placeholder'=>'Nombre de usuario'])!!}
                                </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                            {!! Form::close() !!}
                        <p>
                            <a href="{{route('admin.users.create')}}" class="btn btn-info" role="button">
                                Nuevo Usuario
                            </a>
                        </p>
                        <p>{{$users->lastpage()}} paginas</p>
                        @include('admin.users.partials.table')
                        {!! $users->render()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- formulario oculto siver para enviar los datos no para manejarlos

         el :USER_ID sirve como un placeholder
    -->
    {!! Form::open(['route' => ['admin.users.destroy',':USER_ID'],'method'=>'DELETE','id'=>'form-delete']) !!}
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
                $('.btn-delete').click(function (e){
                    /*
                    La function anonima que se envia a travez de CLICK tiene un argumento que es el
                    evento que tiene un metodo que se llama preventDefault
                    evita que el navegador envie la accion de un enlace
                     */
                    e.preventDefault()

                    var row = $(this).parents('tr');
                    var id = row.data('id');
                    //obtener el formulario de arriba
                    var form = $('#form-delete');
                    //cambial el placeholder del formulario por el ID del usuario
                    var url=form.attr('action').replace(':USER_ID',id);
                    //sirve para obtener datos desde el formulario oculto
                    var data = form.serialize();
                    //se suone que la peticion de eliminacion se realiza
                    row.fadeOut();

                    $.post(url,data,function(result){
                       //result.message sirve para la parte de jason que esta en userController
                        alert(result.message);
                    }).fail(function(){
                        alert('El usuario no fue eliminado');
                        row.show();
                    });


                })
        })
    </script>

@endsection




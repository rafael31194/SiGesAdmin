@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                @if(Session::has('message'))

                    <p class="alert alert-success">{{Session::get('message')}}</p>

                @endif

                <h1 class="page-header">Portal <small>de publicacion de EISI</small></h1>

                <h2><a class="btn btn-primary " href="{{url('publicaciones/create')}}">Nuevo Articulo</a></h2>
                <hr>
                <!-- First Blog Post -->
                @foreach($articles as $article)
                    <h2>

                        <a href="#">{{$article->title}}</a>
                        <span><a href="{{url('publicaciones/'.$article->id.'/edit')}}" class="btn btn-success">(editar)</a></span>
                        <span><a href="#!" class="btn btn-danger">(eliminar)</a></span>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Start Bootstrap</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$article->published_at}}</p>
                    <hr>
                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                    <hr>
                    <p>{{$article->body}}</p>
                    <hr>
                @endforeach

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Buscar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Mision</h4>
                    <p>Desarrollar eficientemente y de conformidad con el reglamento
                        academico, los procesos de registro academico y de matricula
                        de matricula de los estudiantes, ejerciendo la funcion de registro institucional
                        y de cuestion de la informacion y de documentacion academica, debiendo llevar datos estadisticos</p>
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Vision</h4>
                    <p>La Unidad de registro Academico ejecutara sus procesos academicos empleando sistemas
                        de información de avanzada para el manejo de carga academica y matricula con personal altamente
                        calificado y motivado para desarrollar sus funciones</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Grupo13 TOO 2015</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->


    {!! Form::open(['route' => ['publicaciones.destroy', ':Article_id'],'method'=>'DELETE','id'=>'form_delete']) !!}

    {!! Form::close() !!}
@endsection

@section('scripts')

    @stop

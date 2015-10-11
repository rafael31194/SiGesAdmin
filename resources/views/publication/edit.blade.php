@extends('app')
@section('content')
    @include('errors.verification')
    {!! Form::model($article,['route' => ['publicaciones.update', $article->id],'method'=>'PUT']) !!}
        <div class="container"><p>Usted esta a pundo de modificar: {{$article->title}}</p></div>
        @include('publication.partials.form',['submitButtonText' => 'Actualizar Publicacion'])
    {!! Form::close() !!}
      @include('publication.partials.delete')
@stop
@extends('app')
@section('content')
    <div class="container">
        {!! Form::open(['url' => 'publicaciones' ,'method'=>'POST']) !!}
               @include('publication.partials.form',['submitButtonText' => 'Agregar Publicacion'])
        {!! Form::close() !!}
                @include('errors.verification')
    </div>
@stop
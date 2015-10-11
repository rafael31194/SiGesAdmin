<div class="container">
    {!! Form::model($article,['route' => ['publicaciones.destroy',$article->id],'method'=>'DELETE']) !!}
            <!-- delete Form Input -->
    <div class="form-group">
        {!!  Form::submit('Eliminar Articulo',['class'=>'btn btn-danger'])!!}
    </div>
    {!! Form::close() !!}
</div>
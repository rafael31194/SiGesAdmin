<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Edicion de articulo</div>
        <div class="panel-body">
            <!-- title Form Input -->
            <div class="form-group">
                {!!  Form::label('title','Titulo') !!}
                {!!  Form::text('title', null ,['class'=>'form-control'])!!}
            </div>
            <!-- body Form Input -->
            <div class="form-group">
                {!!  Form::label('body','Cuerpo del articulo') !!}
                {!!  Form::textarea('body', null ,['class'=>'form-control'])!!}
            </div>
            <!-- published_at Form Input -->
            <div class="form-group">
                {!!  Form::label('published_at','Fecha de publicacion') !!}
                {!!  Form::input('date', 'published_at' ,date('Y-m-d'),['class'=>'form-control'])!!}
            </div>
            <!-- submint Form Input -->
            <div class="form-group">
                {!!  Form::submit($submitButtonText,['class'=>'btn btn-info'])!!}
            </div>
        </div>
    </div>
</div>
<!-- firstname Form Input -->
<div class="form-group">
        {!!  Form::label('first_name','First Name:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!!  Form::text('first_name', null ,['class'=>'form-control' ])!!}
    </div>
</div>
<!-- lastname Form Input -->
<div class="form-group">
        {!!  Form::label('last_name','Last Name:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 ">
        {!!  Form::text('last_name', null ,['class'=>'form-control'])!!}
    </div>
</div>
<!-- password Form Input -->
<div class="form-group">
        {!!  Form::label('password','Password:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 ">
        {!!  Form::password('password',['class'=>'form-control'])!!}
    </div>
</div>
<!-- user_name Form Input -->
<div class="form-group">
        {!!  Form::label('user_name','Nombre de Usuario:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 ">
        {!!  Form::text('user_name', null ,['class'=>'form-control'])!!}
    </div>
</div>
<!-- email Form Input -->
<div class="form-group">
        {!!  Form::label('email','Email:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 ">
        {!!  Form::text('email', null ,['class'=>'form-control'])!!}
    </div>
</div>
<!-- roluser Form Input -->
<div class="form-group">
    {!!  Form::label('rol','User Type:',['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 ">
    {!!  Form::select('rol', [' '=>'Seleccione un tipo','secretaria'=>'Secretaria','admin'=>'Administrador','docente'=>'Docente'] ,null,['class'=>'form-control'])!!}
    </div>
</div>
<!-- submit Form Input -->

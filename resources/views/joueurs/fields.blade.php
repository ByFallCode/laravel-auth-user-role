<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Equipe Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipe_id', 'Equipe Id:') !!}
    {!! Form::select('equipe_id', $equipes,  old('equipe_id'), ['class' => 'form-control']) !!}
</div>

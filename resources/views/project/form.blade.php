<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nommbre') }}
            {{ Form::text('nommbre', $project->nommbre, ['class' => 'form-control' . ($errors->has('nommbre') ? ' is-invalid' : ''), 'placeholder' => 'Nommbre']) }}
            {!! $errors->first('nommbre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo electronico') }}
            {{ Form::text('correo electronico', $project->correo electronico, ['class' => 'form-control' . ($errors->has('correo electronico') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
            {!! $errors->first('correo electronico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contraseña') }}
            {{ Form::text('contraseña', $project->contraseña, ['class' => 'form-control' . ($errors->has('contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
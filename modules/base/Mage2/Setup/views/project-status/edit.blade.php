@extends('layouts.admin')

@section('main-title','Edit Project Status')

@section('content')
    <div class="row">


        <div class="col-md-12">
        {!! Form::model($projectStatus, ['method' => "put",'route' => ['setup.project-status.update', $projectStatus->id]]) !!}

        @include('mage2setup::project-status._fields')
        <div class="form-group">
            {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    </div>
@endsection
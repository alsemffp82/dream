@extends('layouts.app')

@section('title','| Create New Post')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
                {{ Form::label('title','Title:') }}
                {{ Form::text('title',null, array('class' => 'form-control', 'required' => '', 'max-length' => '255' )) }}

                {{ Form::label('body','Post Body:') }}
                {{ Form::textarea('body',null, array('class' => 'form-control', 'required' => '', 'min-length' => '10' )) }}

                {{ Form::submit('Create Post',['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:16px;']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
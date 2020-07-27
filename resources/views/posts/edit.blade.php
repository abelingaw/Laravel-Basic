@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <h1>Edit Post</h1>
    <br><br>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'summary-ckeditor','class' => 'form-control mr-sm-2', 'placeholder' => 'Body Text'])}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::hidden('_method', 'PUT')}}

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection


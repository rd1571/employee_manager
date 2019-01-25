@extends('layouts.app')

@section('dashboard')

<h1>Edit Post</h1>
<br>

{!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'] }}
    </div>

    <div>
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', $post->description, ['class' => 'form-control', 'placeholder' => 'Description'] }}
        
    </div>

    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Update', ['class' => 'btn btn-primary' ]) }}

{!! Form::close() !!}
@endsection

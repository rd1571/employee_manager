@extends('layouts.app')

@section('dashboard')

<h1>Edit Post</h1>
<br>

{!! Form::open(['action' => ['PostController@update', $p->id], method => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text, '', ['class' => 'form-control', 'placeholder' => 'Title'] }}
    </div>

    <div>
        {{ Form::label('description', 'Description') }}
        {{ Form::text, '', ['class' => 'form-control', 'placeholder' => 'Description'] }}
    </div>

    {{ Form::submit('Update', ['class' => 'btn btn-primary' ]) }}

{!! Form::close() !!}
@endsection

@extends('layouts.app')

@section('dashboard')

<h1>New Post</h1>

<form class="form-horizontal" method="POST" action="{{ route('new') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <!-- <label for="email" class="col-md-3 control-label">Email</label> -->

        <div class="col-md-12">
            <input id="title" type="text" class="form-control" name="title" placeholder="Enter Title" required autofocus>

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        <!-- <label for="email" class="col-md-3 control-label">Email</label> -->

        <div class="col-md-12">
            <textarea rows="15" class="form-control" name="description" id="description" required></textarea>

            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </div>
</form>


@endsection

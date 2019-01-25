@extends('layouts.app')

@section('dashboard')

<h1>All Post</h1>

<div class="table-responsive">
    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        @foreach ($data as $p)    
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->description }}</td>
            <td>
                <a href="/post/edit/{{ $p->id }}">Edit</a> 
                | 
                <a href="#">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection

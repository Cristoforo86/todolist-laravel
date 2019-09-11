@extends('layouts.app')

@section('content')
<style>
    #show-card {
        margin-top: 5rem;
    }

    .btn-pad {
        margin-right: 1rem;
    }
</style>

<div class="card" id="show-card">
    <div class="card-header">
        <h1><a href="http://localhost/udemy/todolist/public/todo/{{$todo->id}}" class="text-muted">{{$todo->text}}</a></h1>
        <h3>Due to:
            <div class="badge badge-danger">{{$todo->due}}</div>
        </h3>
    </div>
    <div class="card-body">
        <p class="card-text">{{$todo->body}}</p>

    </div>
    <div class="card-footer text-muted d-flex">
        <a href="http://localhost/udemy/todolist/public/todo/{{$todo->id}}/edit" class="btn btn-success btn-pad" role="button">Edit</a>
        {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger btn-pad']) }}
        {!! Form::close() !!}
        <a class="btn btn-secondary btn-pad" role="button" href="http://localhost/udemy/todolist/public/">Go Back</a>
    </div>
</div>
@endsection

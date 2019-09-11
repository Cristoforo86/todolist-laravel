@extends('layouts.app')

@section('content')
<style>
    .index-container {
        margin-top: 5rem;
    }

    .card {
        display: grid;
        grid-template-columns: 80% 20%;
    }

    #card-item1 {}

    #card-item2 {
        justify-self: end;
        margin-right: 1rem;
    }
</style>
<div class="index-container">
    <h1>Todos</h1>
    @if(count($todos) > 0)
    @foreach($todos as $todo)
    <div class="card">

        <div id="card-item1">

            <h3><a href="http://localhost/udemy/todolist/public/todo/{{$todo->id}}">
                    {{$todo->text}}
                </a>
            </h3>
        </div>

        <div id="card-item2">
            Due to: <span class="badge badge-danger">{{$todo->due}}</span>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection

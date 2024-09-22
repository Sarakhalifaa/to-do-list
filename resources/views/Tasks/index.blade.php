@extends('layouts.app')

@section('content')
<h1>Task List</h1>
@foreach($tasks as $task)
    <br>
    <div class="card @if($task->isCompleted()) border-success @endif" >
        <div class="card-body">
            <p>{{$task ->description}}</p>
            
            @if(!$task->isCompleted())

            <form action="/Tasks/{{$task->id}}" method="post">
                @method('patch')
                @csrf
                <button class="btn btn-light btn-block" input="submit">complete</button>
             </form>

              @else
              <form action="/Tasks/{{$task->id}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-block  btn-danger mt-3" input="submit">Delete</button>
             </form>

                @endif
        </div>
    </div>
@endforeach
<br>
    <a href="/Tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection

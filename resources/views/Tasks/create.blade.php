@extends('layouts.app')
@section('content')
<h1>New Task</h1>
<form method="post" action="/Tasks">
    <div class="form-group">
        @csrf
        <label for="description">Task Description</label>
        <input class="form-control" name="description"/>
    </div>
    <br>
    <div class="form-group">
        <button class="btn btn-primary">Create Task</button>
    </div>
</form>
@endsection

@extends('layouts.app')
@section('content')
<h1>New Task</h1>
 
@if ($errors->any())
     <div class="alert alert-danger">

         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
        
        </div>
 @endif
 
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

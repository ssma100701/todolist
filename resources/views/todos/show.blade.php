@extends('layouts.app');

@section('content')
    <a class="btn btn-primary" href="/">Go Back</a>
    <h1>{{ $todo->text }}</h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <h3>{{ $todo->body }}</h3>
    <br><br>
    <a href="/todo/{{ $todo->id }}/edit" class="btn btn-secondary">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method','DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection

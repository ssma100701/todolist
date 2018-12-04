@extends('layouts.app');

@section('content')
    <a class="btn btn-primary" href="/">Go Back</a>
    <h1>{{ $todo->text }}</h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <h3>{{ $todo->body }}</h3>
@endsection

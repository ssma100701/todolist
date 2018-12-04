@extends('layouts.app')

@section('content')
<h1>Todos</h1>
@if (count($todos) > 0)
    @foreach ($todos as $todo)
        <div class="card">
            <h3>{{ $todo->text }}<span class="badge badge-danger">{{ $todo->due }}</span></h3>

        </div>
    @endforeach
@endif
@endsection


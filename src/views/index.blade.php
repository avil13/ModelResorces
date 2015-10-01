@extends('modelRes::main_layout')

@section('content')

<h1>{{ $title }}</h1>

<div class="list-group">
    @foreach($data as $v)
    <a href="{{ $path .'/'. $v->id }}" class="list-group-item">
        <h4 class="list-group-item-heading">{{ $v->name }}</h4>
        <p class="list-group-item-text">{{ $v->email }}</p>
    </a>
    @endforeach
</div>

@stop

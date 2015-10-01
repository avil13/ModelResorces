@extends('modelRes::main_layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">{{ $title }}</div>
    <div class="panel-body">
        {{ $data->id }}<br>
        {{ $data->name }}<br>
        {{ $data->email }}<br>
    </div>
</div>

@stop

@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div>
        <h1>Show Task</h1>
        <p>{{ $task->title }}</p>
        <p>{{ $task->description }}</p>
        <p>{{ $task->long_description }}</p>
        <p>{{ $task->completed }}</p>
        <p>{{ $task->created_at }}</p>
        <p>{{ $task->updated_at }}</p>
    </div>
@endsection

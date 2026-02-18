@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="title" placeholder="Title" value="{{ $task->title }}">
        <input type="text" name="description" placeholder="Description" value="{{ $task->description }}">
        <button type="submit">Edit</button>
    </form>
@endsection
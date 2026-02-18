@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
<div class="row">
    <div class="col-12">
        @if (count($tasks) > 0)
            <ul>
                @foreach ($tasks as $task)
                   
                    <a href="{{ route('tasks.show', ['task' => $task->id]) }}"> <li>{{ $task->title }}</li></a>
                @endforeach
            </ul>
        @else
            <p>No tasks found</p>
        @endif
    </div>
</div>
@endsection

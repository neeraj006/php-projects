@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
{{ $errors }}
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
        <input type="text" name="description" placeholder="Description" value="{{ old('description') }}">
        <button type="submit">Create</button>
    </form>
@endsection 
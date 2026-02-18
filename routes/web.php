<?php

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;


Route::get('/', function ()  {
    return redirect()->route('tasks.list');
})->name('home');

Route::get('/tasks', function () {
    return view('index', ['tasks' => Task::latest()->get()]);
})->name('tasks.list');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::post('/tasks', function (TaskRequest $request) {
  $task = Task::create($request->validated());
  return redirect()->route('tasks.show', ['task' => $task]);
})->name('tasks.store');

Route::get('/tasks/{task}/edit', function (Task $task) {
  return view('edit', ['task' => $task]);
})->name('tasks.edit');

Route::put('/tasks/{task}', function (TaskRequest $request, Task $task) {
  $task->update($request->validated());
  return redirect()->route('tasks.show', ['task' => $task]);
})->name('tasks.update');

Route::get('/tasks/{task}', function (Task $task) {
  return view('show', ['task' => $task]);
})->name('tasks.show');




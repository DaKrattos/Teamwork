@extends('layouts.default')
@section('content')
<div class="row">
  <div class="columns large-8">
    <h1>Tasks</h1>
  </div>
  <div class="columns large-4">
  {{ HTML::linkAction('tasks.create','New Task',[],['class'=>'button tiny']) }}
  </div>
  <div class="row">
    <div class="columns large-6">
      <h2>Tasks To Do</h2>
      @foreach($dtasks as $task)
      <div class="row">
        <div class="columns large-12">
          {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br>
          <small>Assigned to:</small> {{ $task->member->firstname . ' ' . $task->member->lastname }}<br>
          <small>Start Date: {{ $task->initialDate }}, End Date: {{ $task->finalDate }} </small>
        </div>
      </div>
      <hr>
      @endforeach
    </div>
    <div class="columns large-6">
      <h2>Completed Task</h2>
      @foreach($ctasks as $task)
      <div class="row">
        <div class="columns large-12">
          {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br>
          <small>Assigned to:</small> {{ $task->member->firstname . ' ' . $task->member->lastname }}<br>
          <small>Start Date: {{ $task->initialDate }}, End Date: {{ $task->finalDate }} </small>
        </div>
      </div>
      <hr>
      @endforeach
    </div>
  </div>
  @stop
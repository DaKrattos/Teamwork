@extends('layouts.default')
@section('content')
<script type="text/javascript">
	$(document).ready(function() {
   $('.datepicker').datepicker({
    format: "yyyy-mm-dd"
  });
 } );
</script>

<h1>Edit Task</h1>


{{ Form::model($task, array('route' => ['tasks.update', $task->id], 'method' => 'PUT') ) }}
<div class="row">
  <div class="columns large-6">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}
    {{ $errors->first('title','<small class="error">:message</small>') }}
  </div>
  <div class="columns large-6">
    {{ Form::label('assignedTo', 'Assigned To') }}
    {{ Form::select('assignedTo',$members) }}
  </div>
</div>
<div class="row">
  <div class="columns large-12">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description') }}
  </div>
</div>
<div class="row">
  <div class="columns large-4">
    {{ Form::label('initialDate', 'Start Date') }}
    {{ Form::text('initialDate',null, array('class' => 'form-control datepicker')) }}
  </div>
  <div class="columns large-4">
    {{ Form::label('finalDate', 'End Date') }}
    {{ Form::text('finalDate',null, array('class' => 'form-control datepicker')) }}
  </div>
  <div class="columns large-2">
    {{ Form::label('duration', 'Duration') }}
    {{ Form::text('duration') }}
  </div>
  <div class="columns large-2">
    {{ Form::label('completed', 'Completed') }}
    {{ Form::checkbox('completed')}}
  </div>
</div>
{{ Form::submit('Publish',array('class'=>'button')) }}

{{ Form::close() }}
@stop
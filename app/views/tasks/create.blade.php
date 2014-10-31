@extends('layouts.default')
@section('content')
  <script type="text/javascript">
	$(document).ready(function() {
	    $('.datepicker').datepicker({
	    	format: "yyyy-mm-dd"
	    });
	} );
  </script>

  <h1>Create Task</h1>


  {{ Form::open(array('route' => 'tasks.store')) }}

    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}
    {{ $errors->first('title','<small class="error">:message</small>') }}

    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description') }}

    {{ Form::label('duration', 'Duration') }}
    {{ Form::text('duration') }}

    {{ Form::label('initialDate', 'Start Date') }}
    {{ Form::text('initialDate','', array('class' => 'form-control datepicker')) }}

    {{ Form::label('finalDate', 'End Date') }}
    {{ Form::text('finalDate','', array('class' => 'form-control datepicker')) }}

    {{ Form::label('assignedTo', 'Assigned To') }}
    {{ Form::select('assignedTo',$members) }}

    {{ Form::submit('Publish',array('class'=>'button')) }}

  {{ Form::close() }}
@stop
@extends('layouts.default')
@section('content')
  <h1>
    {{{ $task->title }}}
  </h1>

  Description: {{{ $task->description }}}
  <br>
  Assigned To: {{{ $task->member->firstname.' '.$task->member->lastname }}}
  <br>
  Duration: {{{ $task->duration }}} hours
  <br>
  Start Date: {{{ $task->initialDate }}}
  <br>
  End Date: {{{ $task->finalDate }}}
@stop
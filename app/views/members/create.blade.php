@extends('layouts.default')
@section('content')
  <h1>Create Member</h1>
  {{ Form::open(array('route' => 'members.store')) }}

    {{ Form::label('firstname', 'Name') }}
    {{ Form::text('firstname') }}

    {{ Form::label('lastname', 'Lastname') }}
    {{ Form::text('lastname') }}

    {{ Form::label('email', 'Email') }}
    {{ Form::text('email') }}

    {{ Form::submit('Create',array('class'=>'button')) }}

  {{ Form::close() }}
@stop
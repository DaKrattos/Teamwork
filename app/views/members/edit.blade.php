@extends('layouts.default')
@section('content')
  <h1>Edit Member</h1>
  {{ Form::model($member, array('route' => ['members.update', $member->id], 'method' => 'PUT') ) }}

    {{ Form::label('firstname', 'Name') }}
    {{ Form::text('firstname') }}

    {{ Form::label('lastname', 'Lastname') }}
    {{ Form::text('lastname') }}

    {{ Form::label('email', 'Email') }}
    {{ Form::text('email') }}

    {{ Form::submit('Update',array('class'=>'button')) }}

  {{ Form::close() }}
@stop
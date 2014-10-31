@extends('layouts.default')
@section('content')
<h1>Edit Member</h1>
  {{ Form::model($member, array('route' => ['members.update', $member->id], 'method' => 'PUT') ) }}
  <div class="row">
    <div class="columns large-6">
      {{ Form::label('firstname', 'Name') }}
      {{ Form::text('firstname') }}
    </div>
    <div class="columns large-6">
      {{ Form::label('lastname', 'Lastname') }}
      {{ Form::text('lastname') }}
    </div>
  </div>
  <div class="row">
    <div class="columns large-12">
      {{ Form::label('email', 'Email') }}
      {{ Form::text('email') }}
    </div>
  </div>

  {{ Form::submit('Update',array('class'=>'button')) }}

{{ Form::close() }}
@stop
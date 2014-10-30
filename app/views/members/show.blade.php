@extends('layouts.default')
@section('content')
  <h1>
    {{{ $member->firstname . '  ' . $member->lastname }}}
  </h1>

  {{{ $member->email }}}
@stop

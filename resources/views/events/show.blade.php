@extends('adminlte::page')

@section('title', 'Event List')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
  <h2>{{ $event->title; }}</h2>
  <div><p>{{ $event->progress; }}% finished</p></div>
@stop
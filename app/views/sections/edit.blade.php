@extends('layout')

@section('title')

  CMS Laravel

@stop

@section('content')

  <h1>Edit section "{{ $sections->name }}"</h1>

 	{{ Form::model($sections, ['route' => ['sections.update', $sections->id], 'method' => 'PUT']) }}

 		@include ('sections/partials/fields')

 		<p>
 			{{ Form::submit('Update section') }}
 		</p>

 	{{ Form::close() }}

@stop
@extends('layouts.default');

@section('content')
		<h1>{{$record->title}}</h1>
		<div class="content">
			<img src="/uploads/blog/medium/{{$record->image}}" style="float: left" alt="" />
			<p>{{!! $record->body !!}}</p>
		</div>

@stop
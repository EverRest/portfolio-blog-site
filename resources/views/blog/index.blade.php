@extends('layouts.default');

@section('content')
		<h1>Publication blog list</h1>
		@foreach($records as $item)
			<div class="row">
				<div class="col-md-2">
					<img src="/uploads/blog/small/{{$item->image}}" alt="" />
				</div><!--.col-md-3-->
				<div class="col-md-10">
					<h2>{{$item->title}}</h2>
					<div class="content">
						{!! $item->body !!}
					</div>
					<a href="/blog/{{$item->slug}}">Read more</a>
				</div><!--.col-md-9-->
			</div><!--.row-->
		@endforeach

		@include('partials.paginate', ['pager' => $records])
@stop
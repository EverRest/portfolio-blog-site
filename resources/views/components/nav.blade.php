<div class="row">
	<div class="col-md-5">
	@foreach($menu['left'] as $item)
		<a href="{{$item->url}}">{{$item->title}}</a>
	@endforeach
	</div><!--.col-md-5-->
	<div class="col-md-2">
	Logo
	</div><!--.col-md-2-->
	<div class="col-md-5">
	@foreach($menu['right'] as $item)
		<a href="{{$item->url}}">{{$item->title}}</a>
	@endforeach
	</div><!--.col-md-5-->
</div><!--.row-->
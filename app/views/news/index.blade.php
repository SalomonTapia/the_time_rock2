@section('main')
<h2>Posts</h2>
@if (!$news->count())
Ninguna noticai
@else
<ul>
	@foreach($news as $new)
	@foreach($posts as $post)
	<li>
		<a href="{{route('news.show',$new->id)}}">
		<strong>{{$new->nom_noticia}}</strong></a>
	</li>

	@endforeach
</ul>
@endif

{{link_to_route('news.create','Nuevo post')}}
@stop
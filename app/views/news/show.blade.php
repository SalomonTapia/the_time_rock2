@section('main')
<p align="center">
	{{link_to_route('posts.index','Volver a Post')}}
</p>
<p>
	{{link_to_route('posts.edit','Editar post', $post->id)}}
</p>
@stop
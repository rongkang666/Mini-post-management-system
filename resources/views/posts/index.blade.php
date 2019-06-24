@extends('../layouts.app')

@section('content')

<div style="margin-bottom:10px;">
<small class="form-text text-muted">The number of posts: {{count($posts)}}</small>
</div>


@if(count($posts)>0)
    <ul class="list-group">

       @foreach($posts as $post)
        <li class="list-group-item"><a href="{{route('posts.show',$post->id)}}">{{$post->post_name}}</a>-----post size({{$post->post_size}})</li>

        @endforeach
    </ul>
@endif
@if(count($posts)==0)
  <div class="container">
    <h2>Oops, run out of posts? Try create one! :D</h2>
  </div>
@endif
    <br>

    <a href="{{route('posts.create')}}" class="btn btn-primary float-right">create new post</a>
@stop

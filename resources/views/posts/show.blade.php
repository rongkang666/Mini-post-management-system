@extends('../layouts.app')

@section('content')

<div class="text-center">
  <h3><strong>Post name:</strong> {{$post->post_name}}</h3>
  <h3><strong>size: </strong>{{$post->post_size}}</h3>
</div>


<hr>

<h2>Edit Posts</h2>

{!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update',$post->id]]) !!}

{{csrf_field()}}

<div class="form-group">

    {!! Form::label('title', 'postName') !!}
    {!! Form::text('post_name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('size', 'postSize') !!}
    {!! Form::text('post_size',null,['class'=>'form-control']) !!}
</div>


<!--<input type="text" name="title" placeholder="enter title">-->
<div class="form-group">
{!! Form::submit('Update',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}



<hr>

{!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]]) !!}
<div class="form-group">
  {!! Form::submit('Delete',['class'=>'btn btn-danger form-control']) !!}
</div>


{!! Form::close() !!}

@stop

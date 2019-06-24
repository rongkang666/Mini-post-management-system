@extends('../layouts.app')

@section('content')

<h1>Edit Posts</h1>

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
{!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}



<hr>

{!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]]) !!}

{!! Form::submit('Delete',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@stop

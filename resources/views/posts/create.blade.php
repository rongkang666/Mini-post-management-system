@extends('../layouts.app')

@section('content')
<h2 class="text-center">Create Post</h2>

<hr>

{!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}

{{csrf_field()}}

<div class="form-group">

    {!! Form::label('title', 'postName') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('size', 'postSize') !!}
    {!! Form::text('size',null,['class'=>'form-control']) !!}
</div>


<!--<input type="text" name="title" placeholder="enter title">-->
<div class="form-group">
{!! Form::submit('CREATE',['class'=>'btn btn-success form-control']) !!}
</div>
{!! Form::close() !!}


@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

@stop

@extends('post.master')
@section('content')
<div class="container mx-auto">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <img src="{{ asset('images/'.$post->image) }}" alt="" width="100%" height="500" class="text-center">
            </div>
        </div>
        <div class="col-md-6 mx-auto mt-5 h-100">
            <div class="card card-body p-5">
            <h2 class="text-center"> {{$post->title}}</h2>
            <div class="">
                <h3>{{$post->description}}</h3>
                <p>Created At {{$post->created_at}}</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="/" class="btn btn-default btn-sm btn-outline-primary mr-5">Back</a>
                    <a href="/edit/{{$post->id}}" class="btn btn-sm btn-primary">Edit</a>
                </div>
      
                {!! Form::open(['route'=>['remove',$post->id],'method'=>'delete','enctype'=>'multipart/form-data','files'=>true]) !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) !!}
                {!! Form::close()!!}
            </div>
        </div>
        </div>
    </div>

</div>
@endsection
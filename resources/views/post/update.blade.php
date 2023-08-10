@extends('post.master')
@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <h2 class="text-center">Create Post </h2>
        {!! Form::model($post,['route'=>['update','id'=>$post->id],'method'=>'put','enctype'=>'multipart/form-data','files'=>true]) !!}
        <div class="form-group mb-3">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Enter title']) !!}
            @error('title')
            <div class="alert alert-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description',old('description'),['class'=>'form-control','placeholder'=>'Enter description']) !!}
            @error('description')
            <div class="alert alert-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            {!! Form::label('image', 'Emage') !!}
            {!! Form::file('image',null,['class'=>'form-control']) !!}
            <img src="{{asset('images/'.$post->image)}}" alt="" width="50" height="50">
            @error('image')
            <div class="alert alert-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            {!! Form::submit("UPDATE",['class'=>'btn btn-sm btn-success mt-3']) !!}
        </div>
        {!! Form::close()!!}
    </div>
</div>
@endsection
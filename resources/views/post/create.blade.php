@extends('post.master')
@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <h2 class="text-center">Create Post </h2>
        {!! Form::open(['route'=>'save','method'=>'POST','enctype'=>'multipart/form-data','files'=>true]) !!}
        <div class="form-group mb-3">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Enter title']) !!}
            @error('title')
            <div class="alert alert-warning text-center">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description',old('description'),['class'=>'form-control','placeholder'=>'Enter description']) !!}
            @error('description')
            <div class="alert alert-warning text-center">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            {!! Form::label('image', 'Emage') !!}
            {!! Form::file('image',null,['class'=>'form-control']) !!}
            @error('image')
            <div class="alert alert-warning text-center">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            {!! Form::submit('POST',['class'=>'btn btn-sm btn-success mt-3']) !!}
        </div>
        {!! Form::close()!!}
    </div>
</div>
@endsection
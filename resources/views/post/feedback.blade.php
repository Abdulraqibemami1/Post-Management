@extends('post.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center m-3">Feedback </h1>
            {!! Form::open(['route'=>'savefeedback','method' => 'post','files' => true,'enctype' =>'multipart/form-data'] )!!}
            <div class="form-group mb-3">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name']) !!}
                @error('name')
                <div class="alert alert-warning text-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email',old('email'),['class'=>'form-control','placeholder'=>'Enter email']) !!}
                @error('email')
                <div class="alert alert-warning text-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::label('feedback', 'Feedback') !!}
                {!! Form::textarea('feedback',old('feedback'),['class'=>'form-control','placeholder'=>'Enter feedback','style'=>'resize:none;height:80px;']) !!}
                @error('feedback')
                <div class="alert alert-warning text-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::submit('Send',['class'=>'btn btn-md btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
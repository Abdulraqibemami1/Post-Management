@extends('post.master')
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center">POSTS </h2>
            @if (session('create'))
                <div class="alert alert-success text-center">{{ session('create') }}</div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger text-center">{{ session('delete') }}</div>
            @endif
            @if (session('update'))
                <div class="alert alert-info text-center">{{ session('update') }}</div>
            @endif
            <div class="d-flex justify-content-between">

            {!! Form::open(['route' => 'search', 'method' => 'get', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
            <div class="input-group mb-3">
                {!! Form::text('search', old('search'),['class' => 'form-control', 'placeholder' => 'Search']) !!}
                <div class="input-group-append">
                    <span class="input-group-text">Search</span>
                </div>
            </div>
            {!! Form::close() !!}
            <a href="/create" class="btn btn-sm btn-primary m-3">Create Post </a>
        </div>


            @forelse ($posts as $post)
                <div class="col-md-4">
                    <div class="card card-body">
                        <h2 class="text-center">{{ $post->title }}</h2>
                        <img src="{{ asset('images/' . $post->image) }}" alt="" style="width: 100%; height:400px">
                        <a href="/show/{{ $post->id }}" class="btn btn-md btn-outline-info mt-3">View More </a>
                    </div>
                </div>
            @empty
                <h2>There is no record ... </h2>
            @endforelse

            {{ $posts->links() }}
        </div>
    </div>
@endsection

@extends('post.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md ">
                <h2 class="text-center">About Us </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis cumque voluptatum animi assumenda
                    accusantium quasi debitis unde deserunt ratione nobis dolor, placeat dolorem commodi iste ullam rem
                    explicabo quo soluta!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium officiis, fugiat sunt quae explicabo
                    quod! Soluta id et est debitis praesentium impedit perferendis, excepturi sequi blanditiis quaerat
                    optio. Dolor, labore!</p>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">

                <h2 class="text-center">What people say about us ! </h2>
                @forelse ($feedbacks as $feedback)
                    <div class="col-md-4 mx-auto">
                        <div class="alert alert-info text-center">
                            <h2>Name : {{ $feedback->name }}</h2>
                            <p>Comment : {{ $feedback->feedback }}</p>
                            <p>Email : {{ $feedback->email }}</p>
                            <span>Feedback Date : {{ $feedback->created_at }}</span>
                        </div>
                    </div>
                @empty
                    <p>There is no feedback</p>
                @endforelse
                {{ $feedbacks->links() }}
            </div>
        </div>
    </div>
@endsection

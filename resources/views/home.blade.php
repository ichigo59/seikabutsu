@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="chat-container row justify-content-center">
    <div class="chat-area">
        <div class="card">
            <div class="card-header">Comment</div>
            <div class="card-body chat-card">
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
                @include('comment')
            </div>
        </div>
    </div>
</div>

<div class="comment-container row justify-content-center">
    <div class="input-group comment-area">
        <textarea class="form-control" placeholder="input massage" aria-label="With textarea"></textarea>
        <button type="input-group-prepend button" class="btn btn-outline-primary comment-btn">Submit</button>
    </div>
</div>

<form method="POST" action="{{route('add')}}">
    @csrf
    <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
            <textarea class="form-control" id="comment" name="comment" placeholder="input massage"
                aria-label="With textarea"></textarea>
            <button type="submit" class="btn btn-outline-primary comment-btn">Submit</button>
        </div>
    </div>
</form>
@endsection

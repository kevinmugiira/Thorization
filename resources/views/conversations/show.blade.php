@extends('layouts.app')


@section('content')

    <h4 class="text-green-400"><a href="/comments">Back</a> </h4>
    <div class="container pl-4 "  style="justify-content: center">

            <h1>{{ $comment->title }}</h1>

        <p class="text-muted">Posted by: {{ $comment->user->name }}</p>

        <div>
            {{ $comment->body }}
        </div>

    <hr>
        @include('conversations.replies')
    </div>
    @endsection

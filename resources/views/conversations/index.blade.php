@extends('layouts.app')



@section('content')

<h1 class="text-red-500 font-bold font-medium">Comments</h1>
<div class="container p-4 " style="justify-content: center">
    @foreach($comments as $comment)
        <h2><a href="/comment/{{$comment->id}}"> {{ $comment->title }}</a></h2>
    @endforeach

</div>


@endsection

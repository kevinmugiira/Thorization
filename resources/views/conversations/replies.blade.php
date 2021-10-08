@foreach($comment->reply as $rep)

    <div>
        <header style="display: flex; justify-content: space-between; ">
            <p class="m-0"><strong> {{$rep->user->name}} said...</strong></p>

            @if($rep->isBest())
                <span style="color: green;">Best Reply!!</span>
            @endif
        </header>


        {{ $rep->body }}

        @can ('update', $comment)
            <form method="POST" action="/best-reply/{{ $rep->id }}">
                @csrf
                 <button
                     type="submit"
                     class="btn p-0 text-muted"
                 >Best Reply?</button>
            </form>
        @endcan
    </div>
    @continue($loop->last)

    <hr>

@endforeach

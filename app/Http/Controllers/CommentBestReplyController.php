<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class CommentBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        $this->authorize('update', $reply->comment);

        $reply->comment->setBestReply($reply);

        return back();
    }
}

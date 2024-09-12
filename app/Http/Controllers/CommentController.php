<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Notifications\CommentAdded;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Ticket $ticket)
    {
        $request->user()->comments()->create([
            'content' => $request->content,
            'ticket_id' => $ticket->id,
            'user_id' => $request->user()->id
        ]);

        $ticket->user->notify(new CommentAdded($ticket));
        return redirect()->back();
    }
}

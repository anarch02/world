<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, string $id)
    {
        Comment::create($request->validate([
            'article_id' => ['required', 'exists:articles,id'],
            'name' => ['required'],
            'email' => ['required', 'email'],
            'text' => ['required'],
        ]));

        return redirect()->back();
    }
}

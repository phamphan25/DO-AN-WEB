<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    // khoi tao ham xem binh luan
    public function index(Request $req){
        $comments = Comment::all();
        // -> orderBy('created_at','desc')
        // -> paginate(10);
        return view('comment.index', compact('comments'));

    }
}
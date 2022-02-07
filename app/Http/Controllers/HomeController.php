<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class HomeController extends Controller
{
    public function one_to_one_rel()
    {
        $data['phondata'] = User::all();
        $data['user_data'] = Phone::all();
        $data['post_data'] = Post::all();
        $data['comment_data'] = Comment::all();
        return view('home', $data);
    }
    
}

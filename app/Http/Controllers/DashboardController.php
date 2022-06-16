<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->paginate(3);
        return view('dashboard', compact('posts'));
    }
}

<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isAdmin', 'auth'])->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at')->paginate(2);
        return view('posts', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        //$newImageName = uniqid() . '-' . $request->title . $request->image->extension();
        //$request->image->move(public_path('images'), $newImageName);

        $user_id = Auth::id();

        Post::create([
            'slug' => $slug,
            'title' => $request['title'],
            'content' => $request['content'],
            'image_path' => 'asd',
            'user_id' => $user_id,
        ]);

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first() ?? abort(404, 'Post Bulunamadı');
        return view('blog.index', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first() ?? abort(404, 'Post Bulunamadı');
        return view('blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug) ?? abort(404, 'Post Bulunamadı');

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        $post->update([
            'slug' => $slug,
            'title' => $request['title'],
            'content' => $request['content'],
        ]);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id) ?? abort(404, 'Post Bulunamadı');
        $post->delete();
        return redirect()->route('dashboard');
    }
}

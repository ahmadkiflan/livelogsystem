<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->where('author_id', Auth::user()->id);

        if (request('keyword')) {
            $posts->where('title', 'like', '%'.request('keyword').'%');
        }

        return view('dashboard.index', ['posts' => $posts->paginate(5)
            ->withQueryString()
            ->onEachSide(1)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|unique:posts|string',
            'category_id' => 'required',
            'content' => 'string|required',
        ]);

        Post::create([
            'title' => $request->title,
            'author_id' => Auth::user()->id,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'content' => $request->content,
        ]);

        return redirect('dashboard')->with(['success' => 'Your post has been successfully!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('dashboard.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

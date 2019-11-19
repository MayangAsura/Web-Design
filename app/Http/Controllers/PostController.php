<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Str;
use App\Post;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        //dd($posts); untuk membaca data menampilkan data dlm bentuk code
        return view('post.index', compact('posts'));
    }
    public function create(){
        $categories = Category::all(); 

        return view('post.create', compact('categories'));
    }

    public function store(){
        Post::create([
            'title' => request('title'),
            'content' => request('content'),
            'slug' => Str::slug(request('title')),
            'category_id' => request('category_id')
        ]);

        return redirect()->route('post.index')->with('info', 'Post Ditambahkan..');
    }

    public function edit(Post $post){
        // $post = Post::find($id);
        $categories = Category::all(); 

        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Post $post){
        // $post = Post::find($id);

        $post->update([
            'title' => request('title'),
            'category_id' => request('category_id'),
            'content' => request('content'),
        ]);
        return redirect()->route('post.index')->withInfo('Post Dieditkan..');
    }

    public function destroy(Post $post)
    {
     $post->delete();
     return redirect()->route('post.index')->withDismissible('Post dihapus..');

    }
}


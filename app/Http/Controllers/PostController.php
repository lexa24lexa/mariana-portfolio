<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function create()
    {
        $post = new Post();

        return view('posts.create', compact('post'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // storing in public/images folder
            $validated['image_url'] = $imagePath;
        }

        $post = Post::create($validated);
        $post->save();

        return redirect('/work');
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete previous image if exists
            if ($post->image_url) {
                Storage::disk('public')->delete($post->image_url);
            }

            // Store new image
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image_url'] = $imagePath;
        }

        $post->update($validated);

        return redirect('/work');
    }

    public function delete(Post $post)
    {
        return view('posts.delete', [
            'post' => $post,
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/work');
    }
}

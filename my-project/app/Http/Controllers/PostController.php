<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function display()
    {
        return view('user.post');
    }

    public function postArticle(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:225',
            'description' => 'required|string|max:500',
            'location' => 'required|string',
            'price' => 'required|integer',
            'categorie' => 'required|string',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = Post::create([
            'title' => $validateData['title'],
            'description' => $validateData['description'],
            'location' => $validateData['location'],
            'price' => $validateData['price'],
            'categorie' => $validateData['categorie'],
            'user_id' => Auth::id(),
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $Post_img) {
                $Post_img_name = $Post_img->getClientOriginalName();
                $Post_img->storeAs('Posts', Auth::id(). '/' . $Post_img_name, '');
                PostImage::create([
                    'img_url' => 'Posts/' . Auth::id() . '/' . $Post_img_name,
                    'post_id' => $post->id,
                ]);
            }
        }
        return redirect()->intended(route('index'))->with('success', 'Post created successfully!');
    }
}

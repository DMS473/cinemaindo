<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {   
        return view('posts',[
            "title" => "All Posts",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search']))->paginate(7)
            // "posts" => Post::all()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Posts",
            "active" => "posts",
            // "post" => Post::find('slug', $slug)->first()
            "post" => $post
    
        ]);
    }
    public function order(Post $post)
    {
        return view('order', [
            "title" => "Single Posts",
            "active" => "posts",
            // "post" => Post::find('slug', $slug)->first()
            "post" => $post
    
        ]);
    }
    public function calculate(Request $request, Post $post)
        {
            $rules = [
                // 'email' => 'required|email:dns'
                'available' => 'required'
            ];
            $validatedData = $request->validate($rules);
            //  return dd($request->all());

            $sisa = $post->available - $request->pesan;
            // $validatedData['available'] = $sisa;
            
            
            // unset($validatedData['email']);
            if ( $sisa >= 0) {
                $validatedData['available'] = $sisa;
                Post::where('slug', $request->slug)->update($validatedData);
                return redirect('/selesai');
            }
            return back()->with('loginError','Tiket abis!');
        }
    // public function kurangin(Request $request)
    //     {
    //         // $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    //         // return response()->json(['slug' => $slug]);
    //     }    

    // public function calculate(Request $request)
    // {
    //     $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}

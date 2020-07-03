<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //authenticate post controller
	public function __construct()
	{
		$this->middleware('auth');
	}

    //create post
    public function create()
    {
    	return view('posts.create');
    }

    //store post
    public function store()
    {
    	$data = request()->validate([
    		'title' => 'required',
    		'body'	 =>	'required',
    		'image' =>	['required', 'image'],
    	]);

    	$imagePath = request('image')->store('uploads', 'public');

    	auth()->user()->posts()->create([
    		'title' 	=> $data['title'],
    		'body'		=> $data['body'],
    		'image'			=> $imagePath,
    	]);

    	return redirect('/profiles/'. auth()->user()->id);
    }

    //show display post
    public function show(User $user, Post $post)
    {   
        //$user = $user->posts()->paginate(1);
        return view('posts.show', compact('post', 'user'));
    }

    //edit post
    public function edit(Post $post)
    {
     return view('posts.edit', compact('post'));      
    }

    //update post
    public function update(Post $post)
    {
        $data = request()->validate([
            'title'    => '',
            'body'     => '',
            'image'    => '',
        ]);

        $post->update($data);

        return redirect('/profiles/'.auth()->id())->with(['message' => 'Post Has Successfully Been Updated!']);
    }

    //delete post

    public function destroy(Post $post)
    {
        /*s$post = Post::find($id);*/
        $post->delete();
        return redirect('/profiles/'.auth()->id())->with(['message' => 'Successfully deleted!']);//->with(['message' => 'Wrong Id']);
    }
}

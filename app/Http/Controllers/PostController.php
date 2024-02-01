<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('delete', 'update', 'edit');
//        $this->authorizeResource(Post::class,'post');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::first();
////        dd($user->name);
//        $posts = Post::all()->filter(function ($post) {
//            return $post->id > 4;
//        });
//        $text = "";
//        foreach ($posts as $post) {
//            $text .= $post->id;
//
//        }
//
//        return $text;
        $posts = Cache::remember('posts', now()->addSeconds(60), function () {
            return Post::latest()->get();
        });
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $imageName = time() . '.' . $request->file('img')->extension();
            $request->file('img')->storeAs('posts', $imageName);

        }
        $post = Post::create([
            'title' => $request['title'],
            'short_content' => $request['short_content'],
            'content' => $request['content'],
            'img' => $imageName ?? 1,
            'user_id' => auth()->id(),
            'category_id' => $request['category_id']
        ]);
//        dd($request['tags']);

        if (isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $post->tags()->attach($tag);
            }
        }
//        $posts=new Post();
//        dd($post);
        PostCreated::dispatch($post);
        Mail::to($request->user())->later(now()->addMillisecond(60), (new \App\Mail\PostCreated($post))->onQueue('send-mail'));
        auth()->user()->notify(new \App\Notifications\PostCreated($post));
        return redirect(route('post.index'))->with("success", "yaratildi");

    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $posts = Post::find($id);
        $tags = Tag::all();
        $categories = Category::all();


//        dd(Post::latest()->get()->except($id)->take(5));
        return view('post.show', [
            'posts' => $posts,
            'recent_posts' => Post::latest()->get()->except($id)->take(5),
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

//        if (! Gate::allows('update-post', $post)) {
//            abort(403);
//        }
//        Gate::authorize('update', $post);
        return view('post.edit')->with(['posts' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
//        Gate::authorize('update-post', $post);
//        Gate::authorize('update', $post);
        if ($request->hasFile('img')) {

            if (isset($post->img)) {
                Storage::delete(['public/posts/' . $post->img]);
            }
            $file = $request->file('img');
            $imageName = time() . '.' . $request->file('img')->extension();
            $request->file('img')->storeAs('posts', $imageName);

        }


        $post->update([
            'title' => $request['title'],
            'short_content' => $request['short_content'],
            'content' => $request['content'],
            'img' => $imageName ?? $post->img
        ]);
        return redirect(route('post.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
//        Gate::authorize('delete-post', $post);
//        Gate::authorize('delete', $post);
        if ($post->img) {
            Storage::delete(['public/posts/' . $post->img]);
        }

        $post->delete();
        return redirect(route('post.index'))->with('success', 'Ochirildi');
    }


}

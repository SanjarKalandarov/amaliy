<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return Post::limit(10)->get();
        return PostResource::collection(Post::limit(10)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            'user_id' => 1,
            'category_id' => $request['category_id']
        ]);
//        dd($request['tags']);

        if (isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $post->tags()->attach($tag);
            }
        }
        return response(['success'=>'yaratildi']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) //Route Model Binding
    {
//        dd(1);
//        return $post;

        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response(['success'=>'deleted']);
    }
}

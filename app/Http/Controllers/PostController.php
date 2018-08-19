<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Knowfox\Crud\Services\Crud;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
        $this->crud->setup('crud.post');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $posts = Post::whereNotNull('published_at')
            ->orderBy('updated_at')->paginate();

        return view('post.home', [
            'posts' => $posts,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->crud->index($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->crud->create();
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(Post $post)
    {
        return $this->crud->edit($post);
    }

    /**
     * Save the form data creating a new post.
     */
    public function store(PostRequest $request)
    {
        list($post, $response) = $this->crud->store($request);
        return $response;
    }

    /**
     * Save the form data editing a post.
     */
    public function update(PostRequest $request, Post $post)
    {
        return $this->crud->update($request, $post);
    }

    /**
     * Delete a post.
     */
    public function destroy(Post $post)
    {
        return $this->crud->destroy($post);
    }
}

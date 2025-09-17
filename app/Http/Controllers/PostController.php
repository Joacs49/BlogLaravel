<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \App\Services\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Muestra todos los Post.
     */
    public function index()
    {
        return view('blog.blogList');
    }

    /**
     * Muestra el fomulario para crear Post.
     */
    public function create()
    {
        return view('blog.blogCreate');
    }

    public function createAccount()
    {
        return view('blog.blogAccount');
    }

    /**
     * Guarda el post en la db.
     */
    public function store(Request $request)
    {
        try {
            $this->postService->store($request->all());

            return redirect()->route('posts.index')->with('success', 'Post creado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al crear el post: ' . $e->getMessage());
        }
    }

    /**
     * Muestra solo un Post.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Muestra el formulario para editar un Post.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Actualiza el Post.
     */
    public function update(Request $request, Post $post)
    {
        try {
            $this->postService->update($request->all(), $post);

            return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar el post: ' . $e->getMessage());
        }
    }

    /**
     * Elimina el Post.
     */
    public function destroy(Post $post)
    {
        try {
            $this->postService->destroy($post);

            return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al eliminar el post: ' . $e->getMessage());
        }
    }
}

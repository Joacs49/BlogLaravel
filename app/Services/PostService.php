<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function store(array $data)
    {
        return Post::create($data);
    }

    public function update(array $data, Post $post)
    {
        $post->update($data);
        return $post;
    }

    public function destroy(Post $post)
    {
        $post->delete();
    }
}

<?php

namespace App\Models;

class Post
{
    public $data;

    /**
     * Create a new post instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        
        $post->myProperty = 'demo data';
        $this->data = $post;
    }
}
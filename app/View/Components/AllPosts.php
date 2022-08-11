<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;
use Ramsey\Collection\Collection;

class AllPosts extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public $posts;
    public function __construct(){
        $this->posts = Post::paginate(10);
    }

    public function render()
    {
        return view('components.posts.index');
    }
}

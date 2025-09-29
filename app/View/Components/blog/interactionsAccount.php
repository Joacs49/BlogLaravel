<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class interactionsAccount extends Component
{
    public $views;
    public $likes;
    public $comments;

    public function __construct($views, $likes, $comments)
    {
        $this->views = $views;
        $this->likes = $likes;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.blog.interactions-account');
    }
}

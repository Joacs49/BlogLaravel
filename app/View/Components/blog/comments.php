<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class comments extends Component
{
    public $title;
    public $date;
    public $comment;
    public $likes;

    public function __construct($title, $date, $comment, $likes)
    {
        $this->title = $title;
        $this->date = $date;
        $this->comment = $comment;
        $this->likes = $likes;
    }

    public function render(): View|Closure|string
    {
        return view('components.blog.comments');
    }
}

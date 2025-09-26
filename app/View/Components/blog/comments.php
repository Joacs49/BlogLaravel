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

    public function __construct($title, $date, $comment)
    {
        $this->title = $title;
        $this->date = $date;
        $this->comment = $comment;
    }

    public function render(): View|Closure|string
    {
        return view('components.blog.comments');
    }
}

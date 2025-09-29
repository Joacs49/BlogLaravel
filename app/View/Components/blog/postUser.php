<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class postUser extends Component
{
    public $category;
    public $state;
    public $date;
    public $title;

    public function __construct($category, $state, $date, $title)
    {
        $this->category = $category;
        $this->state = $state;
        $this->date = $date;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.blog.post-user');
    }
}

<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class publication extends Component
{
    public $author;
    public $date;
    public $title;
    public $description;
    public $tags = [];
    public function __construct($author, $date, $title, $description, $tags = [])
    {
        $this->author = $author;
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
        $this->tags = $tags;
    }

    public function render()
    {
        return view('components.blog.publication');
    }
}

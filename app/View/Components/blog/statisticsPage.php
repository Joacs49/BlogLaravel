<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class statisticsPage extends Component
{
    public $publicPost;
    public $authorActive;
    public $monthlyReaders;
    public $comments;

    public function __construct($publicPost, $authorActive, $monthlyReaders, $comments)
    {
        $this->publicPost = $publicPost;
        $this->authorActive = $authorActive;
        $this->monthlyReaders = $monthlyReaders;
        $this->comments = $comments;
    }
    
    public function render()
    {
        return view('components.blog.statistics-page');
    }
}

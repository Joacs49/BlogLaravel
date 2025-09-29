<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class stats extends Component
{
    public $texto;
    public $numero;

    public function __construct($texto, $numero)
    {
        $this->texto = $texto;
        $this->numero = $numero;
    }

    public function render()
    {
        return view('components.blog.stats');
    }
}

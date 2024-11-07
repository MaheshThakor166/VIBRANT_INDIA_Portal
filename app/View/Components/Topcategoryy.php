<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Topcategoryy extends Component
{
    public $topCategoryProducts;

    /**
     * Create a new component instance.
     *
     * @param array|null $topProducts
     */
    public function __construct($topCategoryProducts = null)
    {
        $this->topCategoryProducts = $topCategoryProducts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.topcategoryy');
    }
}

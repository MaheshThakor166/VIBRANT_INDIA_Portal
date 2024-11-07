<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrandingProduct extends Component
{
    /**
     * The trending products to display.
     */
    public $trendingProducts;

    /**
     * Create a new component instance.
     *
     * @param mixed $trendingProducts
     */
    public function __construct($trendingProducts = null)
    {
        $this->trendingProducts = $trendingProducts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tranding-product');
    }
}

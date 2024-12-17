<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Blogs extends Component
{
    public $blogs;

    /**
     * Create a new component instance.
     *
     * @param  $blogs
     * @return void
     */
    public function __construct($blogs = null)
    {
        $this->blogs =  $blogs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blogs');  // Refers to resources/views/components/blogs.blade.php
    }
}

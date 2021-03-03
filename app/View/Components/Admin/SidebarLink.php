<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class SidebarLink extends Component
{
    public $href;
    public $text;

    /**
     * Create a new component instance.
     *
     * @param $text
     * @param $href
     */
    public function __construct($text, $href)
    {
        $this->text = $text;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admin.sidebar-link');
    }
}

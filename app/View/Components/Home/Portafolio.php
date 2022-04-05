<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portafolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Alpine.js', 'Tailwindcss', 'PHP', 'JavaScript'],
                'title' => 'Portfolio with Laravel + Alpine.js + TailWindCss',
                'image' => url('/img/me1.png'),
                'github' => 'https://github.com/JavierxHernandez/laravel9-portfolio',
            ],
            [
                'category' => ['Yii2', 'PHP', 'JavaScript'],
                'title' => 'E-commerce site made with Yii2 Framework',
                'image' => url('/img/me1.png'),
                'github' => 'https://github.com/JavierxHernandez/yii2-ecommerce-website',
            ],
            [
                'category' => ['Yii2', 'PHP', 'JavaScript'],
                'title' => 'Youtube clone site made with Yii2 Framework',
                'image' => url('/img/me1.png'),
                'github' => 'https://github.com/JavierxHernandez/yii2-youtube-clone-website',
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, value: 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portafolio');
    }
}

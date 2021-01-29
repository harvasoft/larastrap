<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $dataKategori = Http::withToken(env('WP_TOKEN'))->get('https://public-api.wordpress.com/rest/v1.1/sites/idabdasis.wordpress.com/categories')->json('categories');
        $filterred = collect($dataKategori)->whereNotIn('slug', 'tidak-dikategorikan')->where('parent', 0);
        return view('components.navbar', [
            'site' => 'Abd. Asis',
            'dataKategori' => $filterred
        ]);
    }
}

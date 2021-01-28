<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $dataPost = Http::withToken(env('WP_TOKEN'))->get('https://public-api.wordpress.com/rest/v1.1/sites/idabdasis.wordpress.com/posts')->json('posts');
        return view('livewire.index', [
            'dataPost' => $dataPost,
        ]);
    }
}

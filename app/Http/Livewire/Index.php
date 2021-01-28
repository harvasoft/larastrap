<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $dataPost = Http::withToken('akG%268m8PVMP9C$%x6c1aI4ET6pa5EBemO%2h3x)ZtPOaWAuMJa3xkp6VIF!Maw')->get('https://public-api.wordpress.com/rest/v1.1/sites/idabdasis.wordpress.com/posts')->json('posts');
        return view('livewire.index', [
            'dataPost' => $dataPost,
        ]);
    }
}

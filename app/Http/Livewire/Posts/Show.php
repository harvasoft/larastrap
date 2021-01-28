<?php

namespace App\Http\Livewire\Posts;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Show extends Component
{

    public $slug;
    public function mount($slug_post)
    {
        $this->slug = $slug_post;
    }
    public function render()
    {
        $dataPost = Http::withToken('akG%268m8PVMP9C$%x6c1aI4ET6pa5EBemO%2h3x)ZtPOaWAuMJa3xkp6VIF!Maw')->get('https://public-api.wordpress.com/rest/v1.1/sites/idabdasis.wordpress.com/posts/slug:' . $this->slug)->json();
        return view('livewire.posts.show', [
            'post' => $dataPost
        ]);
    }
}

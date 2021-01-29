<?php

namespace App\Http\Livewire;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Index extends Component
{
    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    public function render()
    {
        $dataPost = Http::withToken(env('WP_TOKEN'))->get('https://public-api.wordpress.com/rest/v1.1/sites/idabdasis.wordpress.com/posts')->json('posts');
        $dataRow = Http::withToken(env('WP_TOKEN'))->get('https://public-api.wordpress.com/rest/v1.1/sites/idabdasis.wordpress.com/posts')->json('posts');
        $postRow = $this->paginate($dataRow);
        // dd($dataPost);
        return view('livewire.index', [
            'dataPost' => $dataPost,
            'dataPostRow' => $postRow
        ]);
    }
}

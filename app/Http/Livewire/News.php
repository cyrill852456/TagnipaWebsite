<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\WithPagination;
use Livewire\Component;

class News extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.news',[
            'posts' => Post::latest()->paginate(3),
            'news' => Post::latest()->paginate(3),
            'page' => Post::paginate(3),
        ]);
    }
}

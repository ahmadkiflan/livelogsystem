<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Posts')]
class Posts extends Component
{
    use WithPagination;

    public $query = '';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::latest()
                ->where('title', 'like', '%'.$this->query.'%')
                ->paginate(9),
        ]);
    }
}

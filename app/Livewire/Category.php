<?php

namespace App\Livewire;

use App\Models\Category as ModelsCategory;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;

    public $category;

    public $query = '';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function mount(ModelsCategory $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.category', [
            'posts' => Post::latest()
                ->where('category_id', $this->category->id)
                ->where('title', 'like', '%'.$this->query.'%')
                ->paginate(9),
        ]);
    }
}

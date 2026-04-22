<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;

    public $user;

    public $query = '';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function mount(ModelsUser $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user', [
            'posts' => Post::latest()
                ->where('author_id', $this->user->id)
                ->where('title', 'like', '%'.$this->query.'%')
                ->paginate(12),
        ]);
    }
}

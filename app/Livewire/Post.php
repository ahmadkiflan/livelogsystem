<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Single Post')]
class Post extends Component
{
    public $post;

    public function mount(\App\Models\Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post', [
            'post' => $this->post,
        ]);
    }
}

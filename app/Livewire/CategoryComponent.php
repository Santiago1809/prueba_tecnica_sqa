<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    public $categories;
    public $name;
    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.category-component');
    }
    public function create()
    {
        $this->validate([
            'name' =>'required|min:3',
        ]);

        Category::create([
            'name' => $this->name
        ]);

        return redirect()->to('/');
    }
}

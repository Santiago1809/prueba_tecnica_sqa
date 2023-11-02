<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
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
            'name' =>'required|min:4',
        ]);

        Category::create([
            'name' => $this->name
        ]);

        return redirect()->to('/dashboard');
    }
    public function update($categoryId)
    {
        $category = Category::find($categoryId);
        $this->validate([
            'name' =>'required|min:4'
        ]);
        $category->update([
            'name' => $this->name
        ]);
        return redirect()->to('/dashboard');
    }
    public function deleteCategory($categoryId)
    {
        Post::where('category_id', $categoryId)->delete();
        Category::find($categoryId)->delete();
        return redirect()->to('/dashboard');
    }
}

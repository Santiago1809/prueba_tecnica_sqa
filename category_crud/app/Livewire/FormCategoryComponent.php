<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class FormCategoryComponent extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.form-category-component');
    }
    public function create()
    {
        $this->validate([
            'name' => 'required|min:4'
        ]);
        Category::create([
            'name' => $this->name
        ]);
        return redirect()->to('/dashboard');
    }
}

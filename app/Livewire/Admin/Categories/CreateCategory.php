<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;

   
    public function rules(){
        return [
            'name'=>'required|string',
        ];
    }
    public function submit(){
        $data=$this->validate();
        Category::create($data);
        $this->reset(['name']);
        $this->dispatch('createModelToggle');
        $this->dispatch('refreshData')->to(CategoryData::class);
    }
    public function render()
    {
        return view('admin.categories.create-category');
    }
}

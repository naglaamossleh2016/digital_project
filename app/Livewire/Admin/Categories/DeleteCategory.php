<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class DeleteCategory extends Component
{
     public $category;
    protected $listeners=['DeleteCategory'];

    public function DeleteCategory($id){
        $this->category=Category::find($id);
        $this->dispatch('deleteModelToggle');
    }
    
    public function submit(){
       
        $this->category->delete();
       $this->reset($this->category);
        $this->dispatch('deleteModelToggle');
        $this->dispatch('refreshData')->to(CategoryData::class);
        $this->dispatch('deleteMessage')->to(CategoryData::class);
    }
    public function render()
    {
        return view('admin.categories.delete-category');
    }
}

<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Component;

class CategoryData extends Component
{
    
    use WithPagination;
    public $search;
    protected $listeners=['refreshData'=>'$refresh','updateMessage','deleteMessage'];
    public function updateMessage(){
        session()->flash('message', 'Category Updated successfully .');
    }
    public function deleteMessage(){
        session()->flash('message', 'Category Deleted successfully .');
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.categories.category-data',['data'=>Category::where('name','like','%'.$this->search.'%')->paginate(10)]);
    }
    
}

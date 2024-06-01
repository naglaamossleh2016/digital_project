<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class UpdateCategory extends Component
{
     public $counter,$name;
    protected $listeners=['UpdateCategory'];

    public function UpdateCategory($id){
       
        $this->counter=Category::find($id);
        $this->name=$this->counter->name;
        
        $this->resetValidation();
        $this->dispatch('editModelToggle');
       
    }
     public function rules(){
        return [
            'name'=>'required|string',
            
        ];
    }
    public function submit(){
        $data=$this->validate();
        $this->counter->update($data);
       
        $this->dispatch('editModelToggle');
        $this->dispatch('refreshData')->to(CategoryData::class);
        $this->dispatch('updateMessage')->to(CategoryData::class);
    }

    public function render()
    {
        return view('admin.categories.update-category');
    }
}

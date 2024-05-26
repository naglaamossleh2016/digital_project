<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\WithPagination;
use Livewire\Component;

class CounterData extends Component
{
      use WithPagination;
    public $search;
    protected $listeners=['refreshData'=>'$refresh','updateMessage','deleteMessage'];
    public function updateMessage(){
        session()->flash('message', 'Counters Updated successfully .');
    }
    public function deleteMessage(){
        session()->flash('message', 'Counters Deleted successfully .');
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.counters.counter-data',['data'=>Counter::where('name','like','%'.$this->search.'%')->paginate(10)]);
    }
   
}

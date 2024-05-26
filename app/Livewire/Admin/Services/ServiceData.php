<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\WithPagination;
use Livewire\Component;

class ServiceData extends Component
{
    use WithPagination;
    public $search;
    protected $listeners=['refreshData'=>'$refresh','updateMessage','deleteMessage'];
    public function updateMessage(){
        session()->flash('message', 'Services Updated successfully.');
    }
    public function deleteMessage(){
        session()->flash('message', 'Services Deleted successfully.');
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.services.service-data',['data'=>Service::where('name','like','%'.$this->search.'%')->paginate(10)]);
    }
    
}

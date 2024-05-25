<?php

namespace App\Livewire\Admin\Subscribers;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Subscriber;

class SubscriberData extends Component
{
     use WithPagination;
    public $search;
    protected $listeners=['refreshData'=>'$refresh','updateMessage','deleteMessage'];
    public function updateMessage(){
        session()->flash('message', 'Subscribers Updated successfully.');
    }
    public function deleteMessage(){
        session()->flash('message', 'Subscribers Deleted successfully.');
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.subscribers.subscriber-data',['data'=>Subscriber::where('email','like','%'.$this->search.'%')->paginate(10)]);
    }
    
}

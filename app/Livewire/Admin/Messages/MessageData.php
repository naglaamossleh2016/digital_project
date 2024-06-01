<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\WithPagination;

use Livewire\Component;

class MessageData extends Component
{
    use WithPagination;
    public $search;
    protected $listeners=['refreshData'=>'$refresh','deleteMessage'];
   
    public function deleteMessage(){
        session()->flash('message', 'Services Deleted successfully.');
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.messages.message-data',['data'=>Message::where('name','like','%'.$this->search.'%')->paginate(10)]);
    }
    
}

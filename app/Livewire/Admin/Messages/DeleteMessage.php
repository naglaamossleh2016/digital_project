<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class DeleteMessage extends Component
{
    public $message;
    protected $listeners=['DeleteMessage'];

    public function DeleteMessage($id){
        $this->message=Message::find($id);
        $this->dispatch('deleteModelToggle');
    }
    
    public function submit(){
       
        $this->message->delete();
       $this->reset($this->message);
        $this->dispatch('deleteModelToggle');
        $this->dispatch('refreshData')->to(MessageData::class);
        $this->dispatch('deleteMessage')->to(MessageData::class);
    }
    public function render()
    {
        return view('admin.messages.delete-message');
    }
}

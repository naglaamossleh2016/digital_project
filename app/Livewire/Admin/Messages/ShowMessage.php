<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class ShowMessage extends Component
{
     public $record, $name,$email,$subject,$message;
    protected $listeners=['ShowMessage'];

    public function ShowMessage($id){
        $this->record=Message::find($id);
        $this->name=$this->record->name;
        $this->email=$this->record->email;
        $this->subject=$this->record->subject;
        $this->message=$this->record->message;
        $this->dispatch('showModelToggle');
        $this->record->update(['status'=>'1']);
        $this->dispatch('refreshData')->to(MessageData::class);

       
    }
    public function render()
    {
        return view('admin.messages.show-message');
    }
}

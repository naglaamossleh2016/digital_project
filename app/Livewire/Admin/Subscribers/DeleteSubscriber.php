<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class DeleteSubscriber extends Component
{
     public $subscriber;
    protected $listeners=['DeleteSubscriber'];

    public function DeleteSubscriber($id){
        
        $this->subscriber=Subscriber::find($id);
        $this->dispatch('deleteModelToggle');
    }
    
    public function submit(){
       
        $this->subscriber->delete();
       $this->reset($this->subscriber);
        $this->dispatch('deleteModelToggle');
        $this->dispatch('refreshData')->to(SubscriberData::class);
        $this->dispatch('deleteMessage')->to(SubscriberData::class);
    }
    public function render()
    {
        return view('admin.subscribers.delete-subscriber');
    }
}

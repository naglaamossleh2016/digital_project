<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class DeleteCounter extends Component
{
    public $counter;
    protected $listeners=['DeleteCount'];

    public function DeleteCount($id){
        $this->counter=Counter::find($id);
        $this->dispatch('deleteModelToggle');
    }
    
    public function submit(){
       
        $this->counter->delete();
       $this->reset($this->counter);
        $this->dispatch('deleteModelToggle');
        $this->dispatch('refreshData')->to(CounterData::class);
        $this->dispatch('deleteMessage')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counters.delete-counter');
    }
}

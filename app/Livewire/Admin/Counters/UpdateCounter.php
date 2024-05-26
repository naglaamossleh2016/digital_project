<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class UpdateCounter extends Component
{
    public $counter,$name,$count,$icon;
    protected $listeners=['UpdateCount'];

    public function UpdateCount($id){
        
        $this->counter=Counter::find($id);
        $this->name=$this->counter->name;
        $this->count=$this->counter->count;
        $this->icon=$this->counter->icon;
        $this->resetValidation();
        $this->dispatch('editModelToggle');
       
    }
     public function rules(){
        return [
            'name'=>'required|string',
            'count'=>'required|numeric',
            'icon'=>'required|string'
        ];
    }
    public function submit(){
        $data=$this->validate();
        $this->counter->update($data);
       
        $this->dispatch('editModelToggle');
        $this->dispatch('refreshData')->to(CounterData::class);
        $this->dispatch('updateMessage')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counters.update-counter');
    }
}

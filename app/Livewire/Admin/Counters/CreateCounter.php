<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CreateCounter extends Component
{
     public $name,$count,$icon;

   
    public function rules(){
        return [
            'name'=>'required|string',
            'count'=>'required|numeric',
            'icon'=>'required|string'
        ];
    }
    public function submit(){
        $data=$this->validate();
        Counter::create($data);
        $this->reset(['name','count','icon']);
        $this->dispatch('createModelToggle');
        $this->dispatch('refreshData')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counters.create-counter');
    }
}

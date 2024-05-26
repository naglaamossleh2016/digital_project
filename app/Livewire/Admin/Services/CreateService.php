<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class CreateService extends Component
{
      public $name,$description,$icon;

   
    public function rules(){
        return [
            'name'=>'required|string',
            'description'=>'required|string',
            'icon'=>'required|string'
        ];
    }
    public function submit(){
        $data=$this->validate();
        Service::create($data);
        $this->reset(['name','description','icon']);
        $this->dispatch('createModelToggle');
        $this->dispatch('refreshData')->to(ServiceData::class);
    }
    public function render()
    {
        return view('admin.services.create-service');
    }
}

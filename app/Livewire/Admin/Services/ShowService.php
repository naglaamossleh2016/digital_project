<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ShowService extends Component
{
    public $service,$name,$description,$icon;
    protected $listeners=['ShowService'];

    public function ShowService($id){
        $this->service=Service::find($id);
        $this->name=$this->service->name;
        $this->description=$this->service->description;
        $this->icon=$this->service->icon;
        $this->dispatch('showModelToggle');
       
    }
    public function render()
    {
        return view('admin.services.show-service');
    }
}

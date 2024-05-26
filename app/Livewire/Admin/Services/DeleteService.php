<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class DeleteService extends Component
{
     public $service;
    protected $listeners=['DeleteService'];

    public function DeleteService($id){
        $this->service=Service::find($id);
        $this->dispatch('deleteModelToggle');
    }
    
    public function submit(){
       
        $this->service->delete();
       $this->reset($this->service);
        $this->dispatch('deleteModelToggle');
        $this->dispatch('refreshData')->to(ServiceData::class);
        $this->dispatch('deleteMessage')->to(ServiceData::class);
    }
    public function render()
    {
        return view('admin.services.delete-service');
    }
}

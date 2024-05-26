<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class UpdateService extends Component
{
     public $service,$name,$description,$icon;
    protected $listeners=['UpdateService'];

    public function UpdateService($id){
        
        $this->service=Service::find($id);
        $this->name=$this->service->name;
        $this->description=$this->service->description;
        $this->icon=$this->service->icon;
        $this->resetValidation();
        $this->dispatch('editModelToggle');
       
    }
     public function rules(){
        return [
            'name'=>'required|string',
            'description'=>'required|string',
            'icon'=>'required|string'
        ];
    }
    public function submit(){
        $data=$this->validate();
        $this->service->update($data);
       
        $this->dispatch('editModelToggle');
        $this->dispatch('refreshData')->to(ServiceData::class);
        $this->dispatch('updateMessage')->to(ServiceData::class);
    }
    public function render()
    {
        return view('admin.services.update-service');
    }
}

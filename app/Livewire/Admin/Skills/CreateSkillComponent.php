<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkillComponent extends Component
{
    public $name,$progress;

   
    public function rules(){
        return [
            'name'=>'required|string',
            'progress'=>'required|numeric'
        ];
    }
    public function submit(){
        $data=$this->validate();
        Skill::create($data);
        $this->reset(['name','progress']);
        $this->dispatch('createModelToggle');
        $this->dispatch('refreshData')->to(SkillDataComponent::class);
    }
    public function render()
    {
        return view('admin.skills.create-skill-component');
    }
}

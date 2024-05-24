<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkillComponent extends Component
{
    public $skills;

    public function mount(){
      $this->skills=new Skill();
    }
    public function rules(){
        return [
            'skills.name'=>'required|string',
            'skills.progress'=>'required|numeric'
        ];
    }
    public function submit(){
        $this->validate();
    }
    public function render()
    {
        return view('admin.skills.create-skill-component');
    }
}

<?php

namespace App\Livewire\Admin\Skills;
use App\Models\Skill;
use Livewire\Component;

class ShowSkillComponent extends Component
{
    public $skill,$name,$progress;
    protected $listeners=['ShowSkill'];

    public function ShowSkill($id){
        $this->skill=Skill::find($id);
        $this->name=$this->skill->name;
        $this->progress=$this->skill->progress;
        $this->dispatch('showModelToggle');
       
    }
    

    public function render()
    {
        return view('admin.skills.show-skill-component');
    }
}

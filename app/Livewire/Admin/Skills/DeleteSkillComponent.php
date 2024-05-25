<?php

namespace App\Livewire\Admin\Skills;
use App\Models\Skill;
use Livewire\Component;

class DeleteSkillComponent extends Component
{
   public $skill;
    protected $listeners=['DeleteSkill'];

    public function DeleteSkill($id){
        $this->skill=Skill::find($id);
        $this->dispatch('deleteModelToggle');
    }
    
    public function submit(){
       
        $this->skill->delete();
       $this->reset($this->skill);
        $this->dispatch('deleteModelToggle');
        $this->dispatch('refreshData')->to(SkillDataComponent::class);
        $this->dispatch('deleteMessage')->to(SkillDataComponent::class);
    }


    public function render()
    {
        return view('admin.skills.delete-skill-component');
    }
}

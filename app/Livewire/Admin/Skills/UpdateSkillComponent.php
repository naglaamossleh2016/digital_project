<?php

namespace App\Livewire\Admin\Skills;
use App\Models\Skill;
use Livewire\Component;

class UpdateSkillComponent extends Component
{
    public $skill,$name,$progress;
    protected $listeners=['UpdateSkill'];

    public function UpdateSkill($id){
        $this->skill=Skill::find($id);
        $this->name=$this->skill->name;
        $this->progress=$this->skill->progress;
        $this->resetValidation();
        $this->dispatch('editModelToggle');
       
    }
     public function rules(){
        return [
            'name'=>'required|string',
            'progress'=>'required|numeric'
        ];
    }
    public function submit(){
        $data=$this->validate();
        $this->skill->update($data);
       
        $this->dispatch('editModelToggle');
        $this->dispatch('refreshData')->to(SkillDataComponent::class);
        $this->dispatch('updateMessage')->to(SkillDataComponent::class);
    }
    public function render()
    {
        return view('admin.skills.update-skill-component');
    }
}

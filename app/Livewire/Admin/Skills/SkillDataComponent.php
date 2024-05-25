<?php

namespace App\Livewire\Admin\Skills;
use App\Models\Skill;
use Livewire\WithPagination;
use Livewire\Component;

class SkillDataComponent extends Component
{
    use WithPagination;
    public $search;
    protected $listeners=['refreshData'=>'$refresh','updateMessage','deleteMessage'];
    public function updateMessage(){
        session()->flash('message', 'Skills Updated successfully updated.');
    }
    public function deleteMessage(){
        session()->flash('message', 'Skills Deleted successfully updated.');
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.skills.skill-data-component',['data'=>Skill::where('name','like','%'.$this->search.'%')->paginate(10)]);
    }
}

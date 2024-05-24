<?php

namespace App\Livewire\Admin\Settings;
use App\Models\Setting;
use Livewire\Component;

class SettingComponent extends Component
{
    public $settings;
    public function mount(){
     $this->settings=Setting::find('4');
    }
    public function rules(){
        return [
            'settings.name'=>'required|string',
            'settings.address'=>'required|string',
            'settings.email'=>'required|email',
            'settings.phone'=>'required|string',
            'settings.facebook'=>'nullable|url',
            'settings.twitter'=>'nullable|url',
            'settings.linkedin'=>'nullable|url',
            'settings.instagram'=>'nullable|url',
        ];
    }
    public function submit(){
        $this->validate();
        $this->settings->save();
        session()->flash('message', 'Settings successfully updated.');
    }
    public function render()
    {
        return view('admin.settings.setting-component');
    }
}

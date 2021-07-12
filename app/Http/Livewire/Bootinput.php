<?php

namespace App\Http\Livewire;

use App\Models\Cat1;
use Livewire\Component;

class Bootinput extends Component
{

//    public $hiddenId;
    public $cat1name;
    public $cat1code;

//    public $isOpen;

    protected $rules =[
        'cat1name' => 'required|min:2|max:20',
        'cat1code' => 'required|min:2|max:6'
    ];


    public function submit()
    {
        $validateData = $this->validate();
        Cat1::cr3eate($validateData);
    }

    public function render()
    {
        $allData = Cat1::latest()->get();
        return view('livewire.bootinput',[
            'cat1datas' => $allData
        ]);
    }
}

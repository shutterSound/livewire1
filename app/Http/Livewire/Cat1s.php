<?php

namespace App\Http\Livewire;

use App\Models\Cat1;
use Livewire\Component;

class Cat1s extends Component
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
        Cat1::create($validateData);
session()->flash('success','자료추가 완료');
    }

    public function editForm($id)
    {
$oneData = Cat1::find($id);
$this->cat1name = $oneData->cat1name;
$this->cat1code = $oneData->cat1code;
dd($id);
}

    public function render()
    {
        $allData = Cat1::latest()->get();
        return view('livewire.cat1s',[
            'cat1datas' => $allData
        ]);
    }
}

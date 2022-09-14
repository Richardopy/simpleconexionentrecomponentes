<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Body extends Component{

    protected $listeners = ['actualizar' => 'cargar'];

    protected $queryString = ['search' => ['except' => '']];

    public $search='';

    public function render()
    {
        return view('livewire.body');
    }

    public function cargar($data){
        $this->search=$data;
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Body extends Component{

    protected $listeners = ['actualizar' => 'cargar'];

    protected $queryString = ['search' => ['except' => ''],'categoria_id' => ['except' => '']];

    public $search='',$categoria_id;

    public function render()
    {
        return view('livewire.body');
    }

    public function cargar($search,$categoria_id){
        $this->search=$search;
        $this->categoria_id=$categoria_id;
    }
}

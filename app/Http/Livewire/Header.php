<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component{

    protected $queryString = ['search' => ['except' => ''],'categoria_id' => ['except' => '']];

    public $search='',$categoria_id;

    public function render(){

        $this->actualizar();

        return view('livewire.header');
    }

    public function actualizar(){
        $this->emit('actualizar',$this->search,$this->categoria_id);
    }
}

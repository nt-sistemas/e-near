<?php

namespace App\Livewire\App;

use Livewire\Component;

class Company extends Component
{
    public $companies;

    public function mount()
    {
        $this->companies = auth()->user()->companies;
    }

    public function render()
    {
        return view('livewire.app.company');
    }
}

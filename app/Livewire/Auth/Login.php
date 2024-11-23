<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public $email = null;
    public $password = null;

    #[Layout('components.layouts.site')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('app.main');
        }

        $this->addError('email', 'Favor Verificar seus dados.');
    }
}

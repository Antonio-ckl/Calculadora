<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'email obrigatório',
        'email.email' => 'formato de email invalido',
        'password.required' => 'password obrigatorio',
        'password.min' => 'o tamanho minimo de caracteres é 6'
    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {


            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.deshboard');
            }
            if (Auth::user()->role === 'professor') {
                return redirect()->route('professor.deshboard');
            }
            if (Auth::user()->role === 'aluno') {
                return redirect()->route('aluno.deshboard');
            }
        }
        session()->flash('error', 'Email e senha incorretos ');
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
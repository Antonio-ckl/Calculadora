<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Redirect;
>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5
use Livewire\Component;

class Login extends Component
{

    public $email;
<<<<<<< HEAD
    public $senha;

    protected $rules= [
        'email'=> 'required|email',
        'senha'=>'required|min:6'
    ];

    protected $messages = [
        'email.required'=>'email obrigatorio',
        'email.email'=> 'formato de email invalido',
        'senha.required'=> 'password é obrigatorio',
        'senha.min'=> 'o minimo de caracteres sao 6'

    ];

    public function login(){
        $this->validate();

        if(Auth::attempt(['email'=>$this-> email, 'password'=>$this->password])){
            session()->regenerate();
            return redirect()->route(Auth::user()->role==='admin'? 'admin.dashboard' : 'user.dashboard');
        }
        session()->flash('error','email ou senha incorretos');  
    }
=======
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
        if(Auth::attempt(['email'=>$this->email, 'password'=>$this->password])){

        
        if(Auth::user()->role === 'admin'){
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
    
>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5

    public function render()
    {
        return view('livewire.auth.login');
<<<<<<< HEAD
    
    }
}

=======
    }
}
>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5

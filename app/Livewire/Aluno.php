<?php

namespace App\Livewire;

use App\Models\aluno as ModelsAluno;
use Livewire\Component;

class Aluno extends Component
{
    public $email;
    public $cpf;
    public $rm;
    public $numero_da_escola;
    public $senha;

    public function render()
    {
        return view('livewire.aluno');
    }

    public function store(){
        ModelsAluno::create([
            'email' => $this->email,
            'cpf' => $this->cpf,
            'rm' => $this->rm,
            'numero_da_escola' => $this->numero_da_escola,
            'senha' => $this->senha,

        ]); 

        session()->flash('success', 'Cadastro Realizado');
        
    }
}

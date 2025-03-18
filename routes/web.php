<?php

use App\Livewire\Aluno;
use App\Livewire\Auth\Login;
use App\Livewire\Professor as LivewireProfessor;
use App\Livewire\Professor\Deshboard;
use App\Models\professor;
use Illuminate\Support\Facades\Route;

Route::get('/aluno/create', Aluno::class);




Route::get('/login',  Login::class);

Route::get('/admin', function () {
    return 'login admin';
})->middleware(['auth', 'role:admin'])->name('admin.deshboard');

Route::get('/professor', function(){
    return 'login professor';

})->middleware(['auth', 'role:professor'])->name('professor.deshboard');

Route::get('/aluno', function(){
    return 'login aluno';

})->middleware(['auth', 'role:aluno'])->name('aluno.deshboard');


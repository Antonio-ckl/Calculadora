<?php

use App\Livewire\Aluno;
use App\Livewire\Auth\Login;
<<<<<<< HEAD
=======
use App\Livewire\Professor as LivewireProfessor;
use App\Livewire\Professor\Deshboard;
use App\Models\professor;
>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5
use Illuminate\Support\Facades\Route;

Route::get('/aluno/create', Aluno::class);

<<<<<<< HEAD
Route::get('/login', Login::class);

Route::get('/admin', function(){
    return 'login admin';
})->middleware('auth', 'role:admin')-> name('admin.dashboard');

Route::get('/user', function(){
    return 'login user';
})->middleware('auth', 'role:user')-> name('user.dashboard');
=======



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

>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5

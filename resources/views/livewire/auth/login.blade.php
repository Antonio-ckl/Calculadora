<<<<<<< HEAD
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-sm p-4" style="width: 400px">
        <h2 class="text-center mn-4">Login</h2>

        @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}} </div>
        @endif

        <form wire:submit.prevent="login">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" wire:model="email" class="form-control" placeholder="Digite Seu Email">
                @error('email')<span class="text-danger small">{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" wire:model="password" class="form-control" placeholder="Digite Sua Senha">
                @error('password')<span class="text-danger small">{{$message}}</span>@enderror
    </div>
    <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
=======
<div >
    <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="card shadow-sm p-4" style="width: 400px">
            <h2 class="text-conter mb-4">Login</h2>
    
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
    
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" wire:model="email" class="form-control"
                        placeholder="Digite seu email">
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" id="password" wire:model="password" class="form-control"
                        placeholder="Digite sua senha">
    
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
    
        </div>
    
    </div>
</div>
>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5

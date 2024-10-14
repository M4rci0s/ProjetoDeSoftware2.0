@extends('layouts.app')

@section('conteudo')

<main>
    <div class="login-container">
        <h1>Faça Login</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/login" method="post">
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="" required />

            <label name for="username">Senha</label>
            <input type="password" name="password" id="username" placeholder="" required />

            <button type="submit">Logar</button>
        </form>
    </div>
</main>


@endsection
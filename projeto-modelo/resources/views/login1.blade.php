@extends('layouts.app')

@section('conteudo')

<style>
    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 75vh;
        background-color: #030726;
        /* Opcional, ajusta o fundo */
    }

    .form {
        display: flex;
        flex-direction: column;

        gap: 10px;
        max-width: 338px;
        background-color: #fff;
        padding: 20px;
        border-radius: 20px;
        position: relative;

    }

    .title {
        font-size: 28px;
        color: #030726;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
    }

    .title::before,
    .title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: #030726;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: #030726;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    .message,
    .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }

    .signin {
        text-align: center;
    }

    .signin a {
        color: #030726;
    }

    .signin a:hover {
        text-decoration: underline royalblue;
    }

    .flex {
        display: flex;
        width: 100%;
        gap: 6px;
    }

    .form label {
        position: relative;
    }

    .form label .input {
        width: 100%;
        padding: 10px 10px 20px 10px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .form label .input+span {
        position: absolute;
        left: 10px;
        top: 15px;
        color: grey;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
        top: 15px;
        font-size: 0.9em;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
        top: 30px;
        font-size: 0.7em;
        font-weight: 600;
    }

    .form label .input:valid+span {
        color: green;
    }

    .submit {
        border: none;
        outline: none;
        background-color: #030726;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transform: .3s ease;
    }

    .submit:hover {
        background-color: #192059;
        transition: 0.3s ease;
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }
</style>
<div class="container">

    <div class="login-container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="form" action="/login" method="post">
            @csrf

            <p class="title">Login</p>
            <p class="message">Faça login! </p>
            <label>
                <input class="input" name="email" type="email" placeholder="" required>
                <span>Email</span>
            </label>

            <label>
                <input class="input" name="password" type="password" placeholder="" required>
                <span>Senha</span>
            </label>
            <button class="submit">Entrar</button>
            <p class="signin">Não possui conta? <a href="/create">Cadastre-se</a> </p>


        </form>
    </div>
</div>


@endsection
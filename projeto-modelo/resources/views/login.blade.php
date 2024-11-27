@extends('layouts.app')

@section('conteudo')

<style>
    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        background-color: #fff;
        padding: 20px;
        border-radius: 20px;
        position: relative;

    }

    .title {
        font-size: 28px;
        color: #35AD5E;
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
        background-color: #35AD5E;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: #35AD5E;
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
        color: #35AD5E;
    }

    .signin a:hover {
        text-decoration: underline royalblue;
    }

    .flex {
        display: flex;
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
        background-color: #35AD5E;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transform: .3s ease;
    }

    .submit:hover {
        background-color: #35AD52;
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

    #link-topo {
        text-decoration: none;
        color: #eaedf8;
        background-color: #3C60BA;
        padding: 14px;
        position: fixed;
        right: 10px;
        bottom: 10px;
        border-radius: 20%;
        font-size: 14px;
        transition: 0.5s;
    }

    html {
        scroll-behavior: smooth;
    }
</style>


<p class="title">Login</p>
<p class="message">Logue com sua conta</p>
<div class="flex">
    <div class="login">
        @if($errors->any())
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
        @endif
        <form action="/authenticate" method="post">
            @csrf
            <label>
                <input required="" placeholder="" type="email" class="input" name="email">
                <span>Email</span>
            </label>

            <label>
                <input required="" placeholder="" type="password" class="input" name="senha">
                <span>Senha</span>
            </label>

            <button class="submit">Login</button>
            <p class="signin">Não possui uma conta ? <a href="/create">Cadastrar</a> </p>

    </div>
    <a href="#" id="link-topo">&#9650</a>
    @endsection
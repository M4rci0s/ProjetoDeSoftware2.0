@extends('layouts.app')

@section('conteudo')

<style>
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
</style>

<form class="form" action="/store" method="post">
    <p class="title">Cadastro</p>
    <p class="message">Cadastre-se para tornar-se parceiro</p>
    <div class="flex">
        @csrf
        <label>
            <input required="" placeholder="" type="text" class="input" name="nome">
            <span>Nome</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="sobrenome">
            <span>Sobrenome</span>
        </label>
    </div>

    <label>
        <input required="" placeholder="" type="email" class="input" name="email">
        <span>Email</span>
    </label>
    <label>
        <input required="" placeholder="" type="text" class="input" name="cpf">
        <span>CPF</span>
    </label>

    <label>
        <input required="" placeholder="" type="password" class="input" name="senha">
        <span>Senha</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="senhaconf">
        <span>Confirme a senha</span>
    </label>
 

    <button class="submit">Cadastrar</button>
    <p class="signin">Possui uma conta ? <a href="#">Logar</a> </p>
</form>

@endsection
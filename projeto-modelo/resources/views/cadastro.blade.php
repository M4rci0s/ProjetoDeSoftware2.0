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

<div class="container">
    <form class="form" action="/store" method="post" id="formCadastro">
        <p class="title">Cadastro</p>
        <p class="message">Cadastre-se para tornar-se parceiro!</p>
        <div class="flex">
            @csrf
            <label>
                <input required="" placeholder="" type="text" class="input" name="name" id="name">
                <span>Nome</span>
            </label>

            <label>
                <input required="" placeholder="" type="text" class="input" name="sobrenome" id="sobrenome">
                <span>Sobrenome</span>
            </label>
        </div>

        <label>
            <input required="" placeholder="" type="email" class="input" name="email" id="email">
            <span>Email</span>
        </label>
        <label>
            <input required="" placeholder="" type="text" class="input" name="cpf" id="cpf" maxlength="14">
            <span>CPF</span>
        </label>

        <label>
            <input required="" placeholder="" type="password" class="input" name="senha" id="senha">
            <span>Senha</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input" name="senhaconf" id="senhaconf">
            <span>Confirme a senha</span>
        </label>


        <button class="submit">Cadastrar</button>
        <p class="signin">Possui uma conta ? <a href="login">Logar</a> </p>
    </form>
</div>
<a href="#" id="link-topo">&#9650</a>
<script>
    function formatarCPF(cpf) {
        // Remove todos os caracteres não numéricos
        cpf = cpf.replace(/\D/g, '');

        // Formata o CPF
        if (cpf.length <= 3) {
            return cpf;
        } else if (cpf.length <= 6) {
            return cpf.replace(/(\d{3})(\d+)/, '$1.$2');
        } else if (cpf.length <= 9) {
            return cpf.replace(/(\d{3})(\d{3})(\d+)/, '$1.$2.$3');
        } else {
            return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d+)/, '$1.$2.$3-$4');
        }
    }

    document.getElementById('cpf').addEventListener('input', function(event) {
        const input = event.target;
        const formattedCPF = formatarCPF(input.value);
        input.value = formattedCPF;
    });
    document.getElementById('cpf').addEventListener('input', function(event) {
        const input = event.target;
        const formattedCPF = formatarCPF(input.value);
        input.value = formattedCPF;
    });

    function validarCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g, '');

        if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) {
            return false;
        }

        let soma = 0;
        for (let i = 0; i < 9; i++) {
            soma += parseInt(cpf.charAt(i)) * (10 - i);
        }
        let primeiroDigito = 11 - (soma % 11);
        primeiroDigito = primeiroDigito >= 10 ? 0 : primeiroDigito;

        if (parseInt(cpf.charAt(9)) !== primeiroDigito) {
            return false;
        }

        soma = 0;
        for (let i = 0; i < 10; i++) {
            soma += parseInt(cpf.charAt(i)) * (11 - i);
        }
        let segundoDigito = 11 - (soma % 11);
        segundoDigito = segundoDigito >= 10 ? 0 : segundoDigito;

        return parseInt(cpf.charAt(10)) === segundoDigito;
    }

    document.getElementById('formCadastro').addEventListener('submit', function(event) {
        const nome = document.getElementById('name').value;
        const sobrenome = document.getElementById('sobrenome').value;
        const email = document.getElementById('email').value;
        const cpfInput = document.getElementById('cpf').value;
        const senha = document.getElementById('senha').value;
        const senhaConf = document.getElementById('senhaconf').value;

        // Validação de Email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            event.preventDefault();
            alert('Por favor, insira um email válido.');
            return;
        }

        // Validação de CPF
        if (!validarCPF(cpfInput)) {
            event.preventDefault();
            alert('CPF inválido. Por favor, insira um CPF válido.');
            return;
        }

        // Validação de Senha
        if (senha.length < 6) {
            event.preventDefault();
            alert('A senha deve ter pelo menos 6 caracteres.');
            return;
        }

        // Validação de Confirmação de Senha
        if (senha !== senhaConf) {
            event.preventDefault();
            alert('As senhas não coincidem. Por favor, tente novamente.');
            return;
        }
    });
</script>
@endsection
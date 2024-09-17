@extends('layouts.app')

@section('conteudo')

<main>
    <div class="login-container">
        <h1>Faça Login</h1>
        <form action="#">
            <label for="username">Nome do usuário</label>
            <input type="text" id="username" placeholder="" required />

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="" required />

            <button type="submit">Logar</button>
        </form>
    </div>
</main>

<footer>
    <div class="footer-top">
        <div class="footer-links">
            <a href="#">Preciso de um técnico</a>
            <a href="#">Trabalhe conosco</a>
            <a href="#">Contato</a>
            <a href="#">Quem Somos?</a>
        </div>
        <div class="subscribe">
            <p>Se inscreva</p>
            <form action="#">
                <input type="email" placeholder="Enter your email" />
                <button type="submit">Cadastrar-se</button>
            </form>
        </div>
    </div>
    <hr />
    <div class="footer-bottom">
        <nav class="footer-nav">
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos de Uso</a>
            <a href="#">Configuração dos Cookies</a>
        </nav>
    </div>
</footer>

@endsection
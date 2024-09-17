@extends('layouts.app')

@section('conteudo')
<style>
    /* Reset de estilo */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    h1 {
        color: white;
    }

    p {
        color: white;
    }

    h2 {
        color: white;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #0b0f29;
        color: white;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    header {
        background-color: #001A4D;
        padding: 15px;
    }

    header nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header .logo {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    header nav ul {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    header nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 14px;
    }

    header nav ul li a.cadastre-se {
        background-color: #5A75ED;
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: bold;
    }

    main .container {
        display: flex;
        justify-content: space-between;
        padding: 40px 80px;
    }

    .form-section {
        flex: 3;
    }

    .form-section h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .form-section p {
        font-size: 16px;
        margin-bottom: 30px;
    }

    .form-section form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        /* 2 colunas para os inputs */
        gap: 20px;
    }

    .input-group {
        display: flex;
        flex-direction: column;
    }

    .input-group.full-width {
        grid-column: span 2;
        /* Ocupa toda a largura */
    }

    .input-group label {
        margin-bottom: 5px;
    }

    .input-group input,
    .input-group textarea {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #e9e9e9;
        color: #000;
        width: 100%;
    }

    #txtSelec {
        margin-top: 5%;
    }

    .checkbox-group {
        grid-column: span 2;
        /* Alinhar em 2 colunas */
    }

    .checkbox-group {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        /* 3 colunas */
        grid-template-rows: repeat(3, auto);
        /* 2 linhas */
        gap: 5px;
        margin: 20px 0;
        margin-top: -3%;
    }

    .checkbox-group label {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .terms {
        grid-column: span 2;
        /* Ocupa toda a largura */
    }

    button {
        grid-column: span 2;
        /* Ocupa toda a largura */
        background-color: #001A4D;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0057b7;
    }

    .info-section {
        flex: 1;
        padding-left: 40px;
    }

    .info-section h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .email-info,
    .location-info {
        margin-bottom: 30px;
    }

    .location-info img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .cta-section {
        background-color: #001A4D;
        text-align: center;
        padding: 20px;
        margin-top: 40px;
    }

    .cta-section h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .cta-button {
        background-color: #5A75ED;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-size: 16px;
    }






    footer {
        background-color: #081590;
        padding: 20px;
        text-align: center;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-links {
        display: flex;
        gap: 20px;
    }

    .footer-links a {
        color: white;
        text-decoration: none;
    }

    .footer-subscribe {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 20px;
    }

    .footer-subscribe input[type="email"] {
        padding: 10px;
        border-radius: 5px;
        border: none;
        font-size: 16px;
    }

    .subscribe-button {
        background-color: #427bff;
        border: none;
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .footer-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 20px;
    }

    .footer-links {
        display: flex;
        gap: 20px;
        /* Espaçamento entre os links */
        flex-wrap: wrap;
        /* Permite que os links quebrem em linhas, se necessário */
    }

    .footer-links a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
    }

    .footer-links a:hover {
        text-decoration: underline;
    }

    .newsletter-container {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        /* Aligns the block to the right */
        margin-top: 20px;
        /* Adjust as needed */
        gap: 10px;
    }

    .newsletter-container p {
        font-size: 16px;
        margin-right: 10px;
        /* Space between text and input field */
    }

    .newsletter-container input[type="email"] {
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: white;
        color: #333;
    }

    .newsletter-container button {
        padding: 10px 20px;
        background-color: #3C60BA;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .newsletter-container button:hover {
        background-color: #155bb5;
    }

    footer {
        background-color: #081590;
        padding: 20px;
        text-align: center;
    }

    .footer-bottom {
        text-align: center;
        color: white;
    }

    hr {
        border: 0;
        border-top: 1px solid #fff;
        margin: 20px 0;
    }

    .footer-bottom {
        text-align: center;
    }

    .footer-nav {
        display: flex;
        justify-content: center;
        gap: 30px;
        /* Espaçamento entre os links */
        margin-bottom: 10px;
    }

    .footer-nav a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .footer-nav a:hover {
        text-decoration: underline;
    }

    .faq-item {
        background-color: #101A71;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 10px;
        cursor: pointer;
        width: 600px;
    }

    .faq-question {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .faq-answer {
        display: none;
        margin-top: 10px;
        color: #ccc;
        font-size: 16px;
    }

    .plus-icon {
        font-size: 18px;
        color: #fff;
    }
</style>


<main>
    <div class="container">
        <section class="form-section">
            @if ($tecnico)
            <h1>{{ $tecnico->nome }}</h1>
            <p>{{ $tecnico->descricao }}</p>
            @else
            <h1>Técnico não encontrado.</h1>
            @endif
            <form action="https://formsubmit.co/22202269@aluno.cotemig.com.br" method="POST">


                <form action="#">
                    <div class="input-group">
                        <label for="nome">Seu nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Seu nome" required>
                    </div>

                    <div class="input-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
                    </div>

                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="input-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required>
                    </div>
                    <p id="txtSelec">Selecione o(s) serviço(s):</p>
                    <div class="checkbox-group">

                        <label><input type="checkbox"> Reparo de dispositivo</label>
                        <label><input type="checkbox"> Remoção de vírus e malware</label>
                        <label><input type="checkbox"> Configuração de rede</label>
                        <label><input type="checkbox"> Manutenção preventiva</label>
                        <label><input type="checkbox"> Atualização e otimização do sistema</label>
                        <label><input type="checkbox"> Instalação de software</label>
                    </div>

                    <div class="input-group full-width">
                        <label for="descricao">Descreva o problema e/ou qual serviço você necessita:</label>
                        <textarea id="descricao" name="descricao" rows="5" placeholder="Digite sua descrição" required></textarea>
                    </div>

                    <div class="terms">
                        <label><input type="checkbox"> Aceito os Termos</label>
                    </div>

                    <button type="submit">Enviar para orçamento</button>
                    <input type="hidden" name="_subject" value="Novo Orçamento!">
                    <input type="text" style="display: none">
                </form>
            </form>
        </section>

        <aside class="info-section">
            <div class="email-info">
                <h2>Email do técnico</h2>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="mailto:email@email.com">email@email.com</a>
            </div>

            <div class="location-info">
                <h2>Localização</h2>
                <p>Endereço</p>
                <img src="" alt="Mapa da localização">
            </div>
        </aside>
    </div>

    <div class="faq-container">
        <div class="faq-title">
            <h2>Dúvidas?</h2>
            <p>Para qualquer dúvida, <a href="link-de-contato.html">contate-nos</a>.</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span>A RemarTech é segura?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">Sim, a RemarTech oferece diversas garantias para que todos os serviços sejam realizados com segurança e qualidade.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span>Quais tipos de serviço posso encontrar na RemarTech?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">Na RemarTech, você encontra uma variedade de serviços que atendem diferentes necessidades, incluindo suporte técnico, manutenção e muito mais.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span>Como posso encontrar um técnico na RemarTech?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">Você pode encontrar um técnico utilizando a nossa ferramenta de busca na plataforma. Basta inserir sua localização e o tipo de serviço que precisa.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span>Qual o custo de ser um parceiro da RemarTech?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">O custo para ser um parceiro da RemarTech depende do tipo de parceria. Para mais detalhes, recomendamos entrar em contato conosco.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span>Há serviços em domicílio?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">Sim, a RemarTech oferece serviços em domicílio para várias categorias, facilitando o atendimento em sua casa ou empresa.</p>
                </div>
            </div>
        </div>
    </div>



    <footer>
        <div class="footer-top">
            <div class="footer-links">
                <a href="#">Preciso de um técnico</a>
                <a href="#">Trabalhe conosco</a>
                <a href="#">Contato</a>
                <a href="#">Quem Somos?</a>
            </div>
            <div class="newsletter-container">
                <p>Se inscreva:</p>
                <input type="email" placeholder="Enter your email">
                <button>Cadastrar-se</button>
            </div>

        </div>
        <hr>
        <div class="footer-bottom">
            <nav class="footer-nav">
                <a href="#">Política de Privacidade</a>
                <a href="#">Termos de Uso</a>
                <a href="#">Configuração dos Cookies</a>
            </nav>
        </div>
    </footer>

    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('.plus-icon');

            // Toggle the visibility of the answer
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';

            // Toggle the icon between "+" and "-"
            icon.textContent = icon.textContent === '+' ? '-' : '+';
        }
    </script>

    @endsection
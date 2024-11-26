<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindTech</title>

    <style>
        @import url('https://fonts.cdnfonts.com/css/spartan');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Spartan', sans-serif;
        }

        body {
            width: 100%;
            background-color: #030726;
        }

        h1 {
            font-size: 50px;
            line-height: 64px;
            color: #222222;
        }

        h2 {
            font-size: 46px;
            line-height: 54px;
            color: #222222;
        }

        h4 {
            font-size: 20px;
            color: #222222;
        }

        h6 {
            font-weight: 700;
            font-size: 12px;
        }

        p {
            font-size: 16px;
            color: #222222;
            margin: 15px 0 20px 0;
        }

        section-p1 {
            padding: 40px 80px;
        }

        section-m1 {
            margin: 40px 0;
        }

        /*Cabeçalho/Header*/
        .logo {
            width: 100px;
        }

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6px 80px;
            background-color: #101A71;
            box-shadow: 0 5px 15px rgb(0, 0, 0, 0.06);
            z-index: 999;
            position: sticky;
            top: 0;
            left: 0;
        }

        #navbar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar li {
            list-style: none;
            padding: 0 20px;
            position: relative;
        }

        #navbar li a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            transition: 0.3s ease;
        }

        /*Fazer o highlight e underline do texto da página que está*/
        #navbar li a:hover,
        #navbar li a.active {
            color: #fff;
        }

        /*Cria o underline*/
        #navbar li a.active::after,
        #navbar li a:hover::after {
            content: "";
            width: 30%;
            height: 2px;
            background-color: #fff;
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        #cadastre {
            background-color: #3C60BA;
            color: #F7F7F7;
            border-radius: 14px;
            border: none;
            padding: 10px 20px 10px 20px;
            text-align: center;
            cursor: pointer;
            background-repeat: no-repeat;
            font-size: 15px;
            font-weight: 700;
            transition: 0.3s ease;
        }

        #cadastre:hover {
            background-color: #030726;
        }

        table {
            margin-top: 30px;
            width: 100%;
            text-align: center;
            color: #eaedf8;
            font-size: 1.2rem;
        }

        th {
            font-size: 1.4rem;
        }

        tr:hover {
            background-color: gray;
            border: 0;
            gap: 0;
        }

        form a {
            color: #B22222;
        }

        footer {
            background-color: #101A71;
            /* Fundo do rodapé */
            padding: 20px 0;
            color: #fff;
            margin-top: auto;
            width: 100%;
            /* Para o rodapé fixar no fim */
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
            width: 100%;
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

        .subscribe {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .subscribe p {
            margin: 0 0 10px 0;
            font-size: 16px;
        }

        .subscribe form {
            display: flex;
            gap: 10px;
        }

        .subscribe input[type="email"] {
            padding: 8px;
            border-radius: 5px;
            border: none;
            outline: none;
            width: 200px;
        }

        .subscribe button {
            background-color: #007bff;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .subscribe button:hover {
            background-color: #0056b3;
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
            min-width: 90vh;
        }

        .faq-container {
            margin: 0 auto;
            /* Centraliza horizontalmente */
            text-align: center;
            /* Centraliza o texto interno (opcional) */
            width: 100%;
            max-width: 90vh;
            /* Define a largura máxima para o conteúdo */
            padding: 20px;
            /* Adiciona um espaço interno */
            box-sizing: border-box;
            /* Inclui o padding dentro da largura */
        }

        .faq-title h2,
        p {
            color: #fff;
        }


        .faq-container {
            padding-bottom: 50px;
            width: 90vh;
            align-items: center;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            display: none;
            margin-top: 10px;
            color: #fff;
            font-size: 10px;
        }

        .faq-answer p {
            margin-top: 10px;
            color: #fff;
            font-size: 10px;
        }

        .plus-icon {
            font-size: 18px;
            color: #fff;
        }

        .textduvida {
            color: #fff;
        }

        /* Estilizando a barra de rolagem */
        ::-webkit-scrollbar {
            width: 12px;
            /* Largura da barra de rolagem */
            height: 12px;
            /* Altura da barra de rolagem horizontal */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #1e3a8a;
            /* Azul escuro para o 'polegar' */
            border-radius: 10px;
            /* Borda arredondada para o 'polegar' */
        }

        ::-webkit-scrollbar-track {
            background-color: #add8e6;
            /* Azul claro para a trilha da barra de rolagem */
            border-radius: 10px;
            /* Borda arredondada para a trilha */
        }

        ::-webkit-scrollbar-button {
            display: none;
            /* Esconde os botões da barra de rolagem */
        }
    </style>
</head>

<body>
    <header>
        <section id="header" class="section-p1">
            <a href="/"><img src="logofind.png" alt="Logo FindTech" class="logo"></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="/">Inicio</a></li>
                    <li><a href="/tec">Preciso de um técnico</a></li>
                    <li><a href="contatenos">Contato</a></li>
                    <li><a href="upload">Perfil</a></li>
                    <li><a href="login">Faça login</a></li>
                    <li><a href="/create"><button id="cadastre">Cadastre-se</button></a></li>
                </ul>

            </div>
    </header>
    <main class="container">
        @yield('conteudo')
    </main>
    <div class="faq-container">
        <div class="faq-title">
            <h2>Dúvidas?</h2>
            <p>Para qualquer dúvida, <a href="link-de-contato.html">contate-nos</a>.</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span class="textduvida">A FindTech é segura?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">Sim, a FindTech oferece diversas garantias para que todos os serviços sejam realizados com segurança e qualidade.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span class="textduvida">Quais tipos de serviço posso encontrar na FindTech?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">Na FindTech, você encontra uma variedade de serviços que atendem diferentes necessidades, incluindo suporte técnico, manutenção e muito mais.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span class="textduvida">Como posso encontrar um técnico na FindTech?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">Você pode encontrar um técnico utilizando a nossa ferramenta de busca na plataforma. Basta inserir sua localização e o tipo de serviço que precisa.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span class="textduvida">Qual o custo de ser um parceiro da FindTech?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">O custo para ser um parceiro da FindTech depende do tipo de parceria. Para mais detalhes, recomendamos entrar em contato conosco.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <span class="textduvida">Há serviços em domicílio?</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer" style="color: #fff;">
                    <p style="color: #fff;">Sim, a FindTech oferece serviços em domicílio para várias categorias, facilitando o atendimento em sua casa ou empresa.</p>
                </div>
            </div>
        </div>
    </div>



    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('.plus-icon');

            // Toggle the visibility of the answer
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';

            // Toggle the icon between "+" e "-"
            icon.textContent = icon.textContent === '+' ? '-' : '+';
        }
    </script>

    <footer>
        <div class="footer-top">
            <div class="footer-links">
                <a href="/tec">Preciso de um técnico</a>
                <a href="#">Contato</a>
                <a href="#">Quem Somos?</a>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <nav class="footer-nav">
                <a href="#">Política de Privacidade</a>
                <a href="/termos-de-uso">Termos de Uso</a>
                <a href="#">Configuração dos Cookies</a>
            </nav>
        </div>
    </footer>

</body>

</html>
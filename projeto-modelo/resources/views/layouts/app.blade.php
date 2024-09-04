<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RemarTech</title>

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
            background-color: #35AD5E;
            

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
            width: 14rem;
        }

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6px 80px;
            background-color: #eaedf8;
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
            color: #222222;
            transition: 0.3s ease;
        }

        /*Fazer o highlight e underline do texto da página que está*/
        #navbar li a:hover,
        #navbar li a.active {
            color: #35AD5E;
        }

        /*Cria o underline*/
        #navbar li a.active::after,
        #navbar li a:hover::after {
            content: "";
            width: 30%;
            height: 2px;
            background-color: #35AD5E;
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        #cadastre {
            background-color: #35AD5E;
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
            background-color: #56b979;
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

        .container{
            padding-left: 5%;
            padding-top: 2%;
        }
    </style>
</head>

<body>
    <header>
        <section id="header" class="section-p1">
            <a href="#"><img src="emartech.pngJ" alt="Logo RemarTech" class="logo"></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="/">Inicio</a></li>
                    <li><a href="/tec">Preciso de um técnico</a></li>
                    <li><a href="trabalhe.html">Trabalhe conosco</a></li>
                    <li><a href="upload">Contato</a></li>
                    <li><a href="upload">Perfil</a></li>
                    <li><a href="login.html">Faça login</a></li>
                    <li><a href="/create"><button id="cadastre">Cadastre-se</button></a></li>
                </ul>

            </div>
    </header>
    <main class="container">
        @yield('conteudo')
    </main>
</body>

</html>
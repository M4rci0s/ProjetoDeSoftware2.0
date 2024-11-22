@extends('layouts.app')

@section('conteudo')
<style>
    @import url('https://fonts.cdnfonts.com/css/spartan');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Spartan', sans-serif;
    }

    h1 {
        font-size: 50px;
        line-height: 64px;
        color: #fff;
    }

    h2 {
        font-size: 46px;
        line-height: 54px;
        color: #fff;
    }

    h4 {
        font-size: 20px;
        color: #fff;
    }

    h6 {
        font-weight: 700;
        font-size: 12px;
    }

    p {
        font-size: 16px;
        color: #fff;
        margin: 15px 0 20px 0;
    }

    section-p1 {
        padding: 40px 80px;
    }

    section-m1 {
        margin: 40px 0;
    }

    /*Banner abaixo do cabeçalho*/
    #banner {
        /*colocar foto n sei como*/
        height: 90vh;
        width: 100%;
        background-size: cover;
        background-position: top 25% right 0;
        padding: 0 80px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;

    }

    #banner h4 {
        padding-bottom: 15px;
    }

    #banner h1 span {
        color: #fff;
    }

    #banner button {
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

    #banner button:hover {
        background-color: #030726;
    }

    #maisbuscados {
        background-color: #3C60BA;
    }

    .principtext {
        color: #eaedf8;
        text-align: center;
        padding-top: 30px;
        font-size: 38px;
        padding-bottom: 4px;
    }

    .subtext {
        color: #eaedf8;
        text-align: center;
        padding-bottom: 20px;
        font-weight: 500;

    }

    .mb-box h6 {
        padding-top: 10px;
    }

    #maisbuscados {
        text-align: center;
        justify-content: center;
        align-items: center;
        display: grid;

        place-items: center;
    }

    #maisbuscados .pro-container {
        display: flex;
        justify-content: space-between;
        flex-flow: wrap;
        width: 1090px;
    }

    #maisbuscados .pro {
        width: 23%;
        min-width: 280px;
        width: 350px;

        padding: 10px 12px;
        color: #eaedf8;
        border-radius: 25px;
        cursor: pointer;
        box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.03);
        margin: 15px 0;
        transition: 0.2s ease;
        position: relative;
    }

    #maisbuscados .pro img {
        width: 100%;
        border-radius: 20px;
    }

    .des h5 {
        padding: 10px 0 10px;
        font-size: 1.1rem;
    }

    #maisbuscados .pro:hover {
        box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
    }

    #maisbuscados .pro .des {
        text-align: center;
        padding: 8px 0;
    }

    #maisbuscados .pro .des h5 {
        padding-top: 7px;
    }

    #maisbuscados .pro .des span {
        line-height: 16px;
    }

    .imagemfoda {
        max-width: 700px;
        position: absolute;
        left: 1000px;
        min-width: 300px;

    }

    #quemsomos {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        width: 100%;
        height: 40vh;
    }

    #quemsomos h2 {
        padding: 10px 0;
        color: #fff;
    }

    #quemsomos p {
        width: 70%;
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

    .mobile-menu div {
        width: 32px;
        height: 2px;
        background-color: #35AD5E;
        margin: 8px;
        transition: 0.3s;

    }

    .mobile-menu {
        cursor: pointer;
        display: none;
        margin-left: 80%;
    }

    @media(max-width: 999px) {
        body {
            overflow-x: hidden;
        }

        #navbar {
            position: absolute;
            top: 8vh;
            right: 0;
            width: 50vw;
            height: 92vh;
            background-color: #3C60BA;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            transform: translateX(100%);
            transition: transform 0.3s ease-in;
        }

        #navbar li {
            margin-left: 0;

        }

        .mobile-menu {
            display: block;
        }
    }

    /*classe active que é ativa pelo handle*/
    #navbar.active {
        transform: translateX(0);
    }

    .mobile-menu.active .line1 {
        transform: rotate(-45deg) translate(-8px, 8px);
    }

    .mobile-menu.active .line2 {
        opacity: 0;
    }

    .mobile-menu.active .line3 {
        transform: rotate(45deg) translate(-5px, -7px);
    }
</style>

<section id="banner" class="section-p1">
    <img class="imagemfoda" src="fotoinicial.png" alt="">
    <h4>Precisa de socorro?</h4>
    <h1>Procurando um <span>Técnico?</span></h1>
    <p>Deixe seus dispositivos nas mãos certas!
        Contate nossos técnicos para o serviço que necessita.
    </p>
    <button class="button1">Encontrar um técnico</button>
</section>

<section id="maisbuscados" class="section-p1">
    <h2 class="principtext">Serviços mais buscados</h2>
    <p class="subtext">E mais realizados</p>
    <div class="pro-container">
        <div class="pro">
            <img src="reparosdedispositivos.png" alt="">
            <div class="des">
                <h5>Reparo de dispositivos</h5>
                <span>Consertar computadores quebrados
                    e substituir componentes defeituosos.</span>
            </div>
        </div>
        <div class="pro">
            <img src="configuracaorede.png" alt="">
            <div class="des">
                <h5>Configuração de rede</h5>
                <span> Configurar redes locais (LANs),
                    redes sem fio (Wi-Fi), roteadores e switches.</span>
            </div>
        </div>
        <div class="pro">
            <img src="virus.png" alt="">
            <div class="des">
                <h5>Remoção de virus e malware</h5>
                <span>Escanear e limpar sistemas infectados por
                    vírus, spyware, adware e outros tipos de malware.</span>
            </div>
        </div>

        <div class="pro">
            <img src="preventivo.png" alt="">
            <div class="des">
                <h5>Manutenção preventiva</h5>
                <span> Antecipação de problemas através de inspeções
                    regulares e ações corretivas para evitar falhas e maximizar
                    o desempenho.</span>
            </div>
        </div>
        <div class="pro">
            <img src="atualizacao.png" alt="">
            <div class="des">
                <h5>Atualização e otimização do sistema</h5>
                <span> Garantir que os sistemas estejam atualizados com as
                    últimas atualizações de segurança e otimizar o desempenho
                    do sistema</span>
            </div>
        </div>
        <div class="pro">
            <img src="software.png" alt="">
            <div class="des">
                <h5>Instalação de software</h5>
                <span>Instalar e configurar sistemas operacionais,
                    programas de software, drivers e atualizações.</span>
            </div>
        </div>
    </div>
</section>

<section id="quemsomos" class="section-p1">
    <h2>Quem Somos?</h2>
    <p>A FindTech é uma plataforma online que conecta pessoas que precisam de serviços
        em dispositivos, como reparos, configuração de computadores, entre outros, a técnicos parceiros
        cadastrados na plataforma. Com o objetivo de facilitar a contratação de serviços de forma
        conveniente e transparente, tanto para prestadores de serviços quanto para clientes.</p>
</section>

<a href="#" id="link-topo">&#9650</a>

@endsection
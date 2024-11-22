@extends('layouts.app')

@section('conteudo')

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #030726;
        /* Fundo da página */
        color: #fff;
        /* Texto branco */
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        /* Para o sticky footer funcionar */
    }

    h2 {
        color: #fff;
    }


    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        color: #fff;
        width: 100%;
        min-width: 90vh;
    }

    .logo a {
        font-size: 24px;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    nav ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        margin-left: 20px;
        position: relative;
        /* Necessário para dropdown */
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
    }

    nav ul li .dropdown {
        display: none;
        /* Dropdown oculto por padrão */
        position: absolute;
        background-color: #101A71;
        /* Cor de fundo do dropdown */
        list-style: none;
        padding: 10px;
        margin: 0;
        border-radius: 5px;
        z-index: 1000;
    }

    nav ul li:hover .dropdown {
        display: block;
        /* Exibe o dropdown quando o mouse passa por cima */
    }

    .dropdown li {
        margin: 5px 0;
    }

    .dropdown li a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .dropdown li a:hover {
        text-decoration: underline;
    }

    .auth-links {
        display: flex;
        align-items: center;
    }

    .auth-links a {
        color: #fff;
        text-decoration: none;
        margin-left: 20px;
        font-size: 16px;
    }

    .cadastre-se {
        background-color: #007bff;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .cadastre-se:hover {
        background-color: #0056b3;
    }

    .tecnicos-disponiveis {
        padding: 40px 20px;
        background-color: #030726;
        color: #fff;
        min-width: 90vh;
    }

    .tecnicos-disponiveis .container {
        max-width: 1080px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        /* Altera para coluna */
        align-items: flex-start;
        /* Alinha os itens à esquerda */
        gap: 20px;
        /* Espaçamento entre os itens */
    }

    .tecnicos-disponiveis h1 {
        font-size: 28px;
        margin-bottom: 10px;
        color: #fff;
    }

    .tecnicos-disponiveis p {
        font-size: 18px;
        margin-bottom: 30px;
        color: #aaa;
    }

    .filtro button {
        background-color: #101A71;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .filtro button:hover {
        background-color: #0056b3;
    }

    .ordenar {
        position: relative;
    }

    .drop {
        display: none;
    }

    .ordenar:hover .dropdown {
        display: block;
    }

    .dropdown li a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 8px 10px;
    }

    .dropdown li a:hover {
        background-color: #0056b3;
        border-radius: 5px;
    }

    .tecnico-card {
        background-color: #101A71;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%;
        position: relative;
    }

    .tecnico-card h2 {
        font-size: 22px;
        margin: 0;
        color: #fff;
    }

    .descricao-profissional p {
        margin: 0;
        color: #ccc;
        font-size: 16px;
    }

    .informacoes {
        display: flex;
        /* Usa flexbox para alinhar os itens */
        align-items: center;
        /* Alinha verticalmente ao centro */
        gap: 10px;
        /* Espaço entre Localização e Avaliação */
    }

    .informacoes span {
        margin-right: 5px;
        /* Pequeno espaço entre o ícone e o texto Localização */
    }

    .informacoes p {
        margin: 0;
        font-size: 16px;
    }

    .informacoes .estrelas {
        color: #FFD700;
        /* Cor dourada para as estrelas */
        font-weight: bold;
    }

    .contratar {
        color: #0056b3;
        /* Cor do texto do link */
        padding: 10px 15px;
        /* Espaçamento interno */
        border-radius: 5px;
        /* Borda arredondada */
        text-decoration: none;
        /* Remove o sublinhado */
        transition: color 0.3s ease, border-color 0.3s ease;
        /* Transição suave para a cor e a borda */
        position: absolute;
        top: 10px;
        right: 10px;
        display: flex;
        /* Alinha o texto e a imagem horizontalmente */
        align-items: center;
        /* Alinha verticalmente ao centro */
        gap: 5px;
        /* Espaçamento entre o texto e a seta */
        border: 1px solid transparent;
        /* Borda transparente para o efeito de hover */
    }

    .contratar:hover {
        color: #0056b3;
        /* Cor do texto quando o link é hovered */
        border-color: #0056b3;
        /* Cor da borda quando o link é hovered */
        background-color: rgba(0, 123, 255, 0.1);
        /* Cor de fundo levemente azulada quando hovered */
    }

    .icone-seta {
        width: 16px;
        /* Ajuste o tamanho da seta conforme necessário */
        height: 16px;
        vertical-align: middle;
        /* Alinha a seta com o texto */
    }

    .icone-localizacao {
        width: 16px;
        /* Define a largura da imagem */
        height: 16px;
        /* Define a altura da imagem */
        vertical-align: middle;
        /* Alinha o ícone com o texto */
    }

    .convite-inscricao {
        background-color: #030726;
        /* Mantém o fundo da página */
        padding: 40px 0;
        /* Espaçamento para cima e para baixo */
        color: #fff;
    }

    .convite-inscricao .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        text-align: center;
    }

    .ver-mais {
        background-color: #0056b3;
        /* Cor de fundo do botão */
        color: #fff;
        /* Cor do texto */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .ver-mais:hover {
        background-color: #00408d;
        /* Cor de fundo ao passar o mouse */
    }

    .convite-inscricao {
        background-color: #030726;
        /* Mantém o fundo da página */
        padding: 40px 0;
        /* Espaçamento para cima e para baixo */
        color: #fff;
    }

    .convite-inscricao .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
        /* Ocupa toda a largura disponível */
        max-width: 1200px;
        /* Define uma largura máxima */
        margin: 0 auto;
        /* Centraliza a div na tela */
        padding: 0 20px;
        /* Adiciona um pouco de espaçamento lateral */
    }

    .ver-mais {
        background-color: #0056b3;
        /* Cor de fundo do botão */
        color: #fff;
        /* Cor do texto */
        border: none;
        padding: 15px 30px;
        /* Aumenta o tamanho do botão */
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        /* Aumenta o tamanho do texto */
        margin-bottom: 20px;
        /* Espaçamento inferior */
    }

    .ver-mais:hover {
        background-color: #00408d;
        /* Cor de fundo ao passar o mouse */
    }

    .convite-texto {
        background-color: #101A71;
        padding: 30px;
        /* Espaçamento interno */
        border-radius: 10px;
        width: 100%;
        /* Ocupa toda a largura disponível */
        max-width: 100%;
        /* Define uma largura máxima para se igualar aos cards */
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        /* Permite quebra de linha em telas menores */
    }

    .convite-texto h2 {
        margin: 0;
        font-size: 24px;
        /* Tamanho do texto */
        color: #fff;
        flex: 1;
        /* Permite que o texto ocupe mais espaço */
        text-align: left;
        /* Alinha o texto à esquerda */
    }

    .convite-texto .cadastre-se {
        background-color: #007bff;
        color: #fff;
        padding: 15px 30px;
        /* Tamanho do botão */
        border-radius: 5px;
        text-decoration: none;
        font-size: 18px;
        /* Tamanho do texto */
        flex-shrink: 0;
        /* Impede que o botão encolha */
    }

    .convite-texto .cadastre-se:hover {
        background-color: #0056b3;
    }

    /* Estilos do Rodapé */
</style>

<!-- Seção de Técnicos Disponíveis -->
<section class="tecnicos-disponiveis">
    <div class="container">

        <h1>Técnicos disponíveis</h1>
        <p>Aqui encontra-se os melhores técnicos para você</p>

        <div class="filtro">
            <form action="{{ route('searchTecnico') }}" method="GET" style="display: flex; gap: 10px; flex: 1;">
                <input type="text" name="query" placeholder="Digite o nome do técnico..." value="{{ request('query') }}" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%;">
                <button type="submit" style="background-color: #101A71; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Filtrar</button>
            </form>
            <form action="{{ route('searchTecnico') }}" method="GET" style="margin-top: 10px;">
                <button type="submit" style="background-color: #ff4d4d; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Limpar Filtro</button>
            </form>
        </div>

        <!-- Mensagem de Sucesso -->
        @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-top: 10px;">
            {{ session('success') }}
        </div>
        @endif

        <!-- Loop para listar os técnicos -->
        @foreach($valores as $valor)
        <div class="tecnico-card">
            <h2>{{ $valor->name }}</h2>
            <h5>Descrição do técnico</h5>
            <div class="descricao-profissional">
                <p>{{ $valor->descricao }}</p>
            </div>
            <div class="informacoes">
                <img src="icone_localizacao.png" alt="Localização" class="icone-localizacao">
                <span>Localização: {{ $valor->localizacao }}</span>
                <span>Avaliação:</span>
                <span class="estrelas">
                    @for ($i = 1; $i <= 5; $i++)
                        @if($valor->rating >= $i)
                        ★
                        @elseif($valor->rating > ($i - 1) && $valor->rating < $i)
                            <!-- Para meia estrela, você pode personalizar conforme desejar -->
                            ☆
                            @else
                            ☆
                            @endif
                            @endfor
                            ({{ number_format($valor->rating, 1) }} de 5)
                </span>
                <a href="{{ route('contrato.detalhes', $valor->id) }}" class="contratar">Contratar <img src="seta-direita.png" alt="Seta" class="icone-seta"></a>
            </div>

            <!-- Formulário para Avaliar o Técnico -->
            <div class="avaliar-tecnico">
                <form action="{{ route('rating.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="tecnico_id" value="{{ $valor->id }}">
                    <label for="rating_{{ $valor->id }}">Sua Avaliação:</label>
                    <select name="rating" id="rating_{{ $valor->id }}" required>
                        <option value="">Selecione</option>
                        <option value="1">1 estrela</option>
                        <option value="2">2 estrelas</option>
                        <option value="3">3 estrelas</option>
                        <option value="4">4 estrelas</option>
                        <option value="5">5 estrelas</option>
                    </select>
                    <button type="submit">Enviar Avaliação</button>
                </form>
            </div>

        </div>
        @endforeach

    </div>

</section>

<section class="convite-inscricao">
    <div class="container">
        <button class="ver-mais">Ver Mais</button>
        <div class="convite-texto">
            <h2>Faça parte da FindTech como Técnico</h2>
            <a href="#" class="cadastre-se">Cadastre-se</a>
        </div>
    </div>
</section>



@endsection
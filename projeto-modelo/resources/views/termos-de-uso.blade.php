@extends('layouts.app')

@section('conteudo')

<!-- resources/views/termos-de-uso.blade.php -->

<style>
    .termo {
        background-color: aliceblue;
        padding: 30px;
        max-width: 900px;
        align-items: center;
        justify-content: center;
    }

    .tema {
        padding: 10px 0 10px;
    }

    .boxcenter {
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>
<div class="boxcenter">
    <div class="termo">
        <h1>Termos de Uso</h1>
        <p>
        <h3 class="tema">1. INTRODUÇÃO</h3>

        Bem-vindo(a) ao FindTech (“Plataforma”). Ao acessar ou utilizar a Plataforma, você concorda em cumprir e estar vinculado aos seguintes Termos de Uso (“Termos”), juntamente com nossa Política de Privacidade. Caso não concorde com estes Termos, não utilize nossos serviços.

        A FindTech é uma plataforma digital que conecta técnicos de informática (“Técnicos”) com usuários interessados em contratar serviços de manutenção e suporte em equipamentos de informática e eletrônicos (“Usuários”).

        <h3 class="tema">2. DEFINIÇÕES</h3>
        Para os efeitos destes Termos, os seguintes termos terão os significados indicados:

        Plataforma: O site e/ou aplicativo FindTech, por meio do qual é prestado o serviço de intermediação entre Técnicos e Usuários.
        Usuário: Qualquer pessoa que acesse ou utilize a Plataforma para a contratação de serviços de técnicos de informática.
        Técnico: Profissional cadastrado na Plataforma, disponível para realizar serviços de manutenção, reparos e suporte técnico.
        <h3 class="tema">3. SERVIÇOS OFERECIDOS</h3>
        A Plataforma tem como objetivo intermediar o contato entre Usuários e Técnicos, possibilitando que os Usuários solicitem a prestação de serviços diretamente aos Técnicos. Os serviços oferecidos incluem, mas não se limitam a:

        Manutenção e reparo de computadores;
        Instalação de software e hardware;
        Suporte técnico remoto;
        Outros serviços relacionados à área de informática.
        A FindTech atua exclusivamente como intermediária, não se responsabilizando diretamente pela execução dos serviços prestados pelos Técnicos.

        <h3 class="tema">4. CADASTRO E ACESSO À PLATAFORMA</h3>
        Para acessar os serviços oferecidos pela Plataforma, o Usuário deve realizar um cadastro fornecendo informações pessoais precisas e atualizadas. O Usuário compromete-se a manter a confidencialidade de seus dados de login e a não compartilhar suas credenciais com terceiros.

        Os Técnicos também deverão se cadastrar, submetendo informações profissionais que serão verificadas pela Plataforma. A FindTech se reserva o direito de recusar ou suspender cadastros que não atendam aos requisitos de qualidade e segurança.

        <h3 class="tema">5. RESPONSABILIDADES DA PLATAFORMA</h3>
        A FindTech compromete-se a:

        Disponibilizar uma plataforma de fácil acesso para facilitar o contato entre Usuários e Técnicos;
        Verificar, na medida do possível, a qualificação técnica dos profissionais cadastrados, sem, contudo, garantir ou certificar as habilidades de execução dos serviços;
        Manter a Plataforma em funcionamento, salvo interrupções temporárias para manutenção ou por motivos de força maior.
        A FindTech não é responsável:

        Pela execução ou qualidade dos serviços prestados pelos Técnicos;
        Por quaisquer danos ou prejuízos causados por erros, atrasos ou falhas nos serviços prestados pelos Técnicos;
        Pela veracidade das informações fornecidas pelos Técnicos no ato do cadastro.
        6. RESPONSABILIDADES DOS USUÁRIOS E TÉCNICOS
        Usuários:
        O Usuário compromete-se a utilizar a Plataforma de maneira ética e responsável, fornecendo informações verdadeiras ao solicitar um serviço. O Usuário concorda em realizar o pagamento pelos serviços contratados diretamente ao Técnico, de acordo com as condições acordadas entre as partes.

        Técnicos:
        Os Técnicos devem prestar os serviços de acordo com as melhores práticas profissionais e técnicas da área de informática, cumprindo prazos e condições acordadas com os Usuários. É de responsabilidade dos Técnicos o cumprimento de todas as obrigações fiscais e trabalhistas relacionadas à prestação dos serviços.

        <h3 class="tema">7. PAGAMENTO E TRANSAÇÕES</h3>
        A negociação e o pagamento pelos serviços prestados são realizados diretamente entre Usuários e Técnicos. A FindTech não participa do processamento de pagamentos, exceto quando houver previsão em contrato específico para intermediação de pagamentos.

        <h3 class="tema">8. LIMITAÇÃO DE RESPONSABILIDADE</h3>
        A FindTech não garante a execução ou qualidade dos serviços prestados pelos Técnicos, não sendo responsável por quaisquer prejuízos decorrentes de falhas, atrasos ou má execução dos serviços.

        A Plataforma é disponibilizada “no estado em que se encontra”, sem qualquer garantia expressa ou implícita, incluindo, mas não se limitando a garantias de comercialização, adequação a um propósito específico e não violação.

        <h3 class="tema">9. PROPRIEDADE INTELECTUAL</h3>
        Todos os direitos relativos à Plataforma, incluindo, mas não se limitando a textos, imagens, marcas e logotipos, são de propriedade exclusiva da FindTech ou de seus licenciadores, estando protegidos pelas leis de propriedade intelectual. O uso da Plataforma não concede ao Usuário ou Técnico quaisquer direitos sobre tais conteúdos.

        <h3 class="tema">10. MODIFICAÇÕES NOS TERMOS DE USO</h3>
        A FindTech se reserva o direito de modificar estes Termos a qualquer momento, mediante aviso prévio aos Usuários e Técnicos. As modificações entrarão em vigor após a publicação na Plataforma, e o uso contínuo da Plataforma será considerado como aceitação dos novos Termos.

        <h3 class="tema">11. LEGISLAÇÃO APLICÁVEL E FORO</h3>
        Estes Termos são regidos pelas leis da República Federativa do Brasil. Fica eleito o foro da Comarca de [Cidade], Estado de [Estado], como competente para dirimir quaisquer questões decorrentes destes Termos.

        <h3 class="tema">12. CONTATO</h3>
        Para dúvidas ou solicitações relacionadas a estes Termos de Uso, entre em contato através do e-mail: [email de contato da empresa].</p>

    </div>
</div>

@endsection
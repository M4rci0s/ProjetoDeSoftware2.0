@extends('layouts.app')

@section('conteudo')
<style>
    .container {

        min-height: 74.8vh;
        width: 100%;
        display: flex;
        justify-content: center;

    }

    .formulario {
        position: relative;
        padding: 10px;
        max-width: 500px;
        height: auto;
        min-height: 50vh;
        width: 100%;
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        margin-top: 5.5%;
        margin-bottom: 5.5%;
    }

    .formulario header {
        font-size: 1.2rem;
        color: #000;
        font-weight: 600;
        text-align: center;
    }

    .formulario .form {
        margin-top: 15px;
    }

    .form .input-box {
        width: 100%;
        margin-top: 10px;
    }

    .input-box label {
        color: #000;
    }

    .form :where(.input-box input, .select-box) {
        position: relative;
        height: 35px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #000;
        margin-top: 5px;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 6px;
        padding: 0 15px;
        background: #fff;
    }

    .input-box input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .form .column {
        display: flex;
        column-gap: 15px;
    }

    .form .gender-box {
        margin-top: 10px;
    }

    .form :where(.gender-option, .gender) {
        display: flex;
        align-items: center;
        column-gap: 50px;
        flex-wrap: wrap;
    }

    .address :where(input, .select-box) {
        margin-top: 10px;
    }

    .select-box select {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        color: #fff;
        font-size: 1rem;
        background: #030726;
    }

    .form button {
        height: 40px;
        width: 100%;
        color: #fff;
        font-size: 1rem;
        font-weight: 400;
        margin-top: 15px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.2s ease;
        background: #030726;
    }

    .form button:hover {
        background: #030744;
    }
</style>


<section class="container">
    <nav class="formulario">
        <h4>Editar perfil</h4>
        <form class="form" action="POST" onsubmit="return validateForm()">

            <div class="input-box">
                <label>Foto de Perfil</label>
                <input required="" type="file" accept="image/*" id="photoInput" onchange="previewImage(event)">
            </div>

            <div class="image-preview" id="imagePreview" style="display: none;">
                <h5>Pré-visualização da Foto:</h5>
                <img id="preview" src="" alt="Pré-visualização da foto" style="max-width: 200px; max-height: 200px;" />
            </div>

            <div class="input-box">
                <label>Nome e Sobrenome</label>
                <input required="" placeholder="Digite o Nome completo" type="text" id="fullname">
            </div>
            <div class="input-box">
                <label>Email profissional</label>
                <input required="" placeholder="Insira um email" type="email" id="email">
            </div>
            <div class="column">

                <div class="input-box">
                    <label>Número profissional</label>
                    <input required="" oninput="formatPhone(this)" placeholder="Insira um telefone" type="tel" id="phone" maxlength="15">
                </div>
                <div class="input-box">
                    <label>Data de Nascimento</label>
                    <input required="" placeholder="Data de nascimento" type="date" id="birthdate">
                </div>
            </div>

            </div>
            <div class="input-box address">
                <label>Região</label>
                <input required="" placeholder="Insira o região de atuação" type="text" id="region">
            </div>
            </div>
            <button>Editar e Salvar</button>
        </form>
    </nav>

</section>

<script>
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        const preview = document.getElementById('preview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                imagePreview.style.display = 'block'; // Exibe a pré-visualização
            }

            reader.readAsDataURL(file);
        } else {
            imagePreview.style.display = 'none'; // Oculta a pré-visualização se não houver arquivo
        }
    }

    function formatPhone(input) {
        // Remove todos os caracteres não numéricos
        let value = input.value.replace(/\D/g, '');

        // Formata o número no padrão (XX) XXXXX-XXXX ou (XX) XXXX-XXXX
        if (value.length <= 10) {
            value = value.replace(/(\d{2})(\d{4})(\d+)/, '($1) $2-$3');
        } else {
            value = value.replace(/(\d{2})(\d{5})(\d+)/, '($1) $2-$3');
        }

        input.value = value;
    }

    function validateForm() {

        const birthdateInput = document.getElementById('birthdate');
        // Validate birthdate
        const birthdate = new Date(birthdateInput.value);
        const today = new Date();
        if (birthdate >= today) {
            alert('A data de nascimento não pode ser uma data futura.');
            return false;
        }

        return true; // Allow form submission
    }
</script>


@endsection
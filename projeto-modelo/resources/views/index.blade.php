@extends('layouts.app')

@section('conteudo')

@foreach($valores as $valor)

<style>
    svg:not(:root) {
        width: 15px;
    }
</style>
<table>
    <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Email</th>
        <th>Cpf</th>
        <th>Senha</th>
        <th>Senha Conferida</th>
        <th>Excluir Conta</th>
    </tr>
    <tr>
        <td>{{ $valor->nome }}</td>
        <td>{{ $valor->sobrenome }}</td>
        <td>{{ $valor->email }}</td>
        <td>{{ $valor->cpf }}</td>
        <td>{{ $valor->senha }}</td>
        <td>{{ $valor->senhaconf }}</td>

        <td>
            <form action="/delete" method="post" id="form-delete-{{ $valor->id }}">
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $valor->id }}">
                @csrf
                <a href="javascript:var c = confirm('Deseja realmente excluir?'); if (c) { document.getElementById('form-delete-{{ $valor->id }}').submit(); }">Deletar</a>
            </form>
        </td>
    </tr>

    @endforeach
</table>
{{ $valores->links() }}


@endsection
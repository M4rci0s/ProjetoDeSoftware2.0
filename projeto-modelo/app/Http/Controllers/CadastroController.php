<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;


class CadastroController extends Controller
{
    public function index()
    {
        $cadastros = Cadastro::paginate(1);
        return view('index')->with('valores', $cadastros);
    }

    public function tecnicos()
    {
        $cadastros = Cadastro::get();
        return view('tecnicos')->with('valores', $cadastros);
    }

    public function create()
    {
        return view('cadastro');
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        $c = Cadastro::find($id);
        $c->delete();

        return redirect('/');
    }

    public function store(Request $req)
    {
        $usuario = new Cadastro();
        $usuario->nome = $req->nome;
        $usuario->sobrenome = $req->sobrenome;
        $usuario->email = $req->email;
        $usuario->cpf = $req->cpf;
        $usuario->senha = $req->senha;
        $usuario->senhaconf = $req->senhaconf;
        $usuario->save();

        return redirect('/');
    }

    public function update(Request $req)
    {
        $usuario = Cadastro::find($req->id);
        $usuario->nome = $req->nome;
        $usuario->sobrenome = $req->sobrenome;
        $usuario->cpf = $req->cpf;
        $usuario->email = $req->email;
        $usuario->senha = $req->senha;
        $usuario->senhaconf = $req->senhaconf;
        $usuario->save();
        return redirect('/');
    }
}

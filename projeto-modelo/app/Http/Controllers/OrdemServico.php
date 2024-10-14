<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdemServico;
use App\Models\Tecnico;

use Illuminate\Http\Request;

class OrdemServico extends Controller
{
    public function index()
    {
        $os = OrdemServico::all();
        return view("os.index")->with("os", $os);
    }

    public function avaliar(Request $req)
    {
        $os = OrdemServico::find($req->osId);
        $os->nota = $req->nota;
        $os->save();
        return redirect("/");
    }

    public function media(Request $req)
    {
        $tecnico = Tecnico::where("nome", $req->nome)->get()->toArray();
        $media = 0;
        if (count($tecnico) != 0) {
            $os = OrdemServico::where("tecnico_id", $tecnico[0]["id"])->get();
            $soma = 0;
            $contar = 0;
            foreach ($os as $o) {
                $contar++;
                $soma += $o->nota;
            }
            $media = $soma / $contar;
        }
        return view("os.media")->with("media", $media)->with("nome", $req->nome);
    }
}

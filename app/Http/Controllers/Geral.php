<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;         # POSSIBILITA USAR O POST                   (FIXO)
use Illuminate\Support\Facades\Hash; # POSSIBILITA USAR O HASHING                (FIXO)
use Illuminate\Support\Facades\Mail; # POSSIBILITA USAR O EMAIL                  (FIXO)
use Session;                         # POSSIBILITA USAR A SESSÃO                 (FIXO)

use App\Models\Hoteis;               # POSSIBILITA USAR O MODEL                  (VARIÁVEL)

class Geral extends Controller
{
    //========================================================
    # DEFAULT
    //========================================================
    //=====================
    public function index()
    {
        $model = new Hoteis;

        $dados['hoteis'] = $model->imagensHoteis();

        return view('pagina_inicial', $dados);
    }

    //=====================
    public function hotel($id)
    {
        $model = new Hoteis;

        $dados['hotel'] = $model->dados_do_hotel($id);

        return view('pagina_hotel', $dados);
    }
}

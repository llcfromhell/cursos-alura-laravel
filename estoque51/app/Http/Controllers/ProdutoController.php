<?php namespace estoque51\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista(){

        $produtos = DB::select('select * from produtos');

        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra(){

        $id = Request::route('id');

        $produtos = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($produtos)) {
            return "Produto não encontrado";
        } else {
            return view('detalhes')->with('p', $produtos[0]);
        }
        
    }
}
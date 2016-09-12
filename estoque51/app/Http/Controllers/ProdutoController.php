<?php namespace estoque51\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista(){

        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra(){

        $id = Request::route('id');

        $produtos = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($produtos)) {
            return "Produto não encontrado";
        } else {
            return view('produto.detalhes')->with('p', $produtos[0]);
        }
        
    }

    public function novo() {
        return view("produto.formulario");
    }

    public function adicionar() {

        $nome = Request::input("nome");
        $valor = Request::input("valor");
        $quantidade = Request::input("quantidade");
        $descricao = Request::input("descricao");

        //$params = [Request::only("nome","valor","quantidade","descricao")];

        DB::insert('insert into produtos values (null, ?,?,?,?)', array($nome, $valor, $descricao, $quantidade));

        //return view("produto.adicionado")->with('nome', $nome);

        return redirect('/produtos')->withInput();
    }
}
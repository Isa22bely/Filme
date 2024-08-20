<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FichaTecnica;
use App\Models\Ator;
use App\Models\Diretor;
use App\Models\ClasificacaoIndicativa;
use App\Models\Roteirista;
use App\Models\FichaTecnicaDiretor;
use App\Models\FichaTecnicaRoteiristra;
use App\Models\FichaTecnicaAtor;


class ControladorFilme extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $dados = FichaTecnica::with('claisificacao_indicativa')->get();    
     
        return view('exibeLivros', compact('dados'));
       
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clasificacao_indicativa = Clasificacao_indicativa::all();
        return view('novoLivro', compact('clasificacao_indicativa'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Filme();
        $dados->Titulo = $request->input('titulo');
        $dados->Ano= $request->input('ano');
        $dados->Duracao= $request->input('duracao');
        $dados->Idioma= $request->input('idioma');
        $dados->IMDB= $request->input('imdb');
        $dados->Pais= $request->input('pais');
        $dados->Sinopse= $request->input('sinopse');
        $dados->clasificacao_indicativa_id = $request->input('claisificacao_indicativa');
        if($dados->save())
            return redirect('/Filme')->with('success', 'Filme cadastrado com sucesso!!');
        return redirect('/Filme')->with('danger', 'Erro ao cadastrar o Filme!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Filme::find($id);
        if(isset($dados)){
            $claisificacao_indicativa = Claisificacao_indicativa::all();
            return view('editarFilme', compact('dados', 'claisificacao_indicativa'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Filme::find($id);
        if(isset($dados)){
            $dados->Titulo = $request->input('titulo');
            $dados->Ano= $request->input('ano');
            $dados->Duracao= $request->input('duracao');
            $dados->Idioma= $request->input('idioma');
            $dados->IMDB= $request->input('imdb');
            $dados->Pais= $request->input('pais');
            $dados->Sinopse= $request->input('sinopse');
            $dados->clasificacao_indicativa_id = $request->input('claisificacao_indicativa');
            $dados->save();
            return redirect('/Filme')->with('success', 'Fime atualizado com sucesso!!');
        }else{
            return redirect('/Filme')->with('danger', 'Cadastro do filme não localizado!!');
        
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Filme::find($id);
        if(isset($dados)){
            $filmes = FichaTecnicaDiretor::where('diretor_id', '=', $id)->first();
            $filmes = FichaTecnicaRoteirista::where('roteirista_id', '=', $id)->first();
            $filmes = FichaTecnicaAtor::where('ator_id', '=', $id)->first();
            if(!isset($filme)){
                $dados->delete();
                return redirect('/livro')->with('success', 'Cadastro do livro deletado com sucesso!!');
            }else{
                return redirect('/livro')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/livro')->with('danger', 'Cadastro não localizado!!');
        } 
    }


    public function novoFilme($id){
        $dados = DB::table('Diretor')->orderBy('Nome')->get();
        if(isset($dados)){
            $livro = Filme::find($id);
            $dados->Titulo = $filme->Titulo;
            $dados->filme_id = $id;
            return view('novoAutorLivro', compact('dados'));
        }
        return redirect('/filme')->with('danger', 'Não há diretores cadastrados!!');
    }
        
}


    
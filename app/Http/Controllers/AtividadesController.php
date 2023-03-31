<?php

namespace App\Http\Controllers;

use App\Models\Atividades;
use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    /**
     * @var Atividade
     */

     private $atividade;

     public function __construct()
     {
         $this->atividade = new Atividades();
     }

     public function index()
     {
         return view('atividades',['atividades'=>$this->atividade->all()]);
     }

     public function single($id){
         return view('atividade', ['atividade'=>$this->atividade->find($id)]);
     }

    public function store (Request $request){

        $newAtividade = $request->all();

        if(Atividades::create($newAtividade))
            return redirect('/atividades');
        else
            dd("Erro ao inserir atividade");
    }

    public function create (){

        return view('atividade_create');

    }

    public function update(Request $request, $id){
        $updatedAtividade = $request->all();

        if(!Atividades::find($id)->update($updatedAtividade))
            dd("Erro ao atualizar o produto de id $id !");
        return redirect('/atividades');
    }

    public function edit($id){

        $data = ['atividade'=>Atividades::find($id)];
        return view('produto_edit', $data);

    }

    public function delete($id){

        return view('atividades.remove', [
            'atividade' -> Atividades::find($id)
        ]);
    }

    public function remove(Request $request, $id){

        if($request->confirmar==="Deletar")
            if(!Atividades::destroy($id))
            dd("Erro ao deletar o produto $id !");
        return redirect('/atividades/');
    }
}

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
 }

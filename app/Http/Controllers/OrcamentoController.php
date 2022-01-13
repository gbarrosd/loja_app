<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Orcamento;


class OrcamentoController extends Controller
{
    public function display(Request $request){
        if ($request->situacaoFiltro && $request->filtroPeriodoInicial){
            $orcamentos = Orcamento::where('situacao', $request->situacaoFiltro)
            ->whereDate('created_at','>=', date($request->filtroPeriodoInicial))
            ->whereDate('created_at', '<=',date($request->filtroPeriodoFinal))
            ->orderBy('created_at', 'desc')
            ->get();
        }else if($request->situacaoFiltro){
            $orcamentos = Orcamento::where('situacao', $request->situacaoFiltro)
            ->orderBy('created_at', 'desc')
            ->get();
        }else if($request->filtroPeriodoInicial){
            $orcamentos = Orcamento::whereDate('created_at','>=', date($request->filtroPeriodoInicial))
            ->whereDate('created_at', '<=',date($request->filtroPeriodoFinal))
            ->orderBy('created_at', 'desc')
            ->get();
        }
        else {
            $orcamentos = Orcamento::orderBy('created_at', 'desc')->get();
        }
        //
        // $orcamentos = Orcamento::all();

        return view('orcamentos.listOrcamentos', [
            'orcamentos'=>$orcamentos,
        ]);
    }
    public function createForm(){

        return view('orcamentos.orcamentoForm');
    }
    public function store(Request $request){

        $orcamento = new Orcamento();
        $orcamento->create($request->all());

        return redirect()->route('orcamento:list');
    }
    public function visualizar($id){
        $orcamento = Orcamento::where('id', $id)->get();
        $orcamento = $orcamento[0]->toArray();

        // dd($orcamento);

        return view('orcamentos.visualizarOrcamento',[
            'orcamento'=>$orcamento,
        ]);
    }
    public function update(Request $request, $id){
        if($request->input('editar')=='1'){
            $orcamento = Orcamento::findOrFail($id)
                                ->update(['situacao'=>'Emitida']);

            return redirect()->route('orcamento:list');
        }else if($request->input('editar')=='2'){
            $orcamento = Orcamento::findOrFail($id)
                                ->update(['situacao'=>'Entregue']);

            return redirect()->route('orcamento:list');
        }else if($request->input('editar')=='3'){
            $orcamento = Orcamento::findOrFail($id);

            return redirect()->route('orcamento:list');
        }else if($request->input('editar')=='4'){
            $orcamento = Orcamento::findOrFail($id)
                                    ->delete();

            return redirect()->route('orcamento:list');
        }
    }
}

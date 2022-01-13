<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Orcamento;
use App\Models\Nota;

class NotaController extends Controller
{
    public function display(Request $request){
        if ($request->situacaoFiltro && $request->filtroPeriodoInicial){
            $notas = Nota::where('situacao', $request->situacaoFiltro)
            ->whereDate('created_at','>=', date($request->filtroPeriodoInicial))
            ->whereDate('created_at', '<=',date($request->filtroPeriodoFinal))
            ->orderBy('created_at', 'desc')
            ->get();
            foreach($notas as $key => $nota) {
                $atributos = Orcamento::where('id', $nota->orcamento_id)->first();
    
                if(isset($atributos)){
    
                    $notas[$key]['veiculo'] = $atributos->veiculo;
                    $notas[$key]['placa'] = $atributos->placa;
                    $notas[$key]['valor'] = $atributos->valor;
                    $notas[$key]['tipo'] = $atributos->tipo;
                }
            }
        }else if($request->situacaoFiltro){
            $notas = Nota::where('situacao', $request->situacaoFiltro)
            ->orderBy('created_at', 'desc')
            ->get();
            foreach($notas as $key => $nota) {
                $atributos = Orcamento::where('id', $nota->orcamento_id)->first();
    
                if(isset($atributos)){
    
                    $notas[$key]['veiculo'] = $atributos->veiculo;
                    $notas[$key]['placa'] = $atributos->placa;
                    $notas[$key]['valor'] = $atributos->valor;
                    $notas[$key]['tipo'] = $atributos->tipo;
                }
            }
        }else if($request->filtroPeriodoInicial){
            $notas = Nota::whereDate('created_at','>=', date($request->filtroPeriodoInicial))
            ->whereDate('created_at', '<=',date($request->filtroPeriodoFinal))
            ->orderBy('created_at', 'desc')
            ->get();
            foreach($notas as $key => $nota) {
                $atributos = Orcamento::where('id', $nota->orcamento_id)->first();
    
                if(isset($atributos)){
    
                    $notas[$key]['veiculo'] = $atributos->veiculo;
                    $notas[$key]['placa'] = $atributos->placa;
                    $notas[$key]['valor'] = $atributos->valor;
                    $notas[$key]['tipo'] = $atributos->tipo;
                }
            }
        }
        else {
            $notas =  Nota::orderBy('created_at', 'desc')->get();
            foreach($notas as $key => $nota) {
                $atributos = Orcamento::where('id', $nota->orcamento_id)->first();
    
                if(isset($atributos)){
    
                    $notas[$key]['veiculo'] = $atributos->veiculo;
                    $notas[$key]['placa'] = $atributos->placa;
                    $notas[$key]['valor'] = $atributos->valor;
                    $notas[$key]['tipo'] = $atributos->tipo;
                }
            }
        }

        return view('notas.listNotas', [
            'notas' => $notas,
        ]);
    }
    public function createForm(){
        $orcamentos = Orcamento::all();

        return view('notas.notaForm',[
            'orcamentos'=>$orcamentos,
        ]);
    }
    public function store(Request $request){
        // dd($request);
        $nota = new Nota();
        $nota->create([
            'orcamento_id'=>$request->orcamento_id,
            'numero_nota'=>$request->numero_nota,
            'situacao'=>'Gerada'
        ]);

        return redirect()->route('nota:list');

    }
    public function visualizar($id){
        $nota = Nota::where('id', $id)->get();

        foreach($nota as $key => $nota_atributo) {
            $atributos = Orcamento::where('id', $nota_atributo->orcamento_id)->first();
            if(isset($atributos)){

                $nota[$key]['numero'] = $atributos->numero;
                $nota[$key]['veiculo'] = $atributos->veiculo;
                $nota[$key]['placa'] = $atributos->placa;
                $nota[$key]['valor'] = $atributos->valor;
                $nota[$key]['tipo'] = $atributos->tipo;
                $nota[$key]['secretaria'] = $atributos->secretaria;
                $nota[$key]['porcento'] = $atributos->porcento;
                $nota[$key]['valor_real'] = $atributos->valor_real;
            }
        }

        return view('notas.visualizarNota', [
            'nota'=>$nota['0'],
        ]);
    }
    public function update(Request $request, $id){
        if($request->input('editar')=='1'){
            $nota = Nota::findOrFail($id)
                                ->update(['situacao'=>'Recebida']);

            return redirect()->route('nota:list');
        }else if($request->input('editar')=='2'){
            $nota = Nota::findOrFail($id)
                                ->update(['situacao'=>'Finalizada']);

            return redirect()->route('nota:list');
        }else if($request->input('editar')=='3'){
            $nota = Nota::findOrFail($id);
            //aqui vai ser a edição
            return redirect()->route('nota:list');
        }else if($request->input('editar')=='4'){
            $nota = Nota::findOrFail($id)
                                    ->delete();

            return redirect()->route('nota:list');
        }
    }
    
}

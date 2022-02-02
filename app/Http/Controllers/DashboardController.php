<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Orcamento;
use App\Models\Nota;

class DashboardController extends Controller
{
    public function index(){
        // soma do valor total dos orçamentos
        $orcamentos = Orcamento::where('valor','!=', 0)->get('valor');
        $orcamentos = $orcamentos->pluck('valor');
        $valor_orcamentos_total = 0.0;
        for ($i=0; $i < count($orcamentos) ; $i++) { 
            $valor_orcamentos_total += $orcamentos[$i];
        }
        // soma do valor total dos orçamentos de peças
        $orcamentos_pecas = Orcamento::where('valor','!=', 0)
                                    ->where('tipo', '=', 'Peças')
                                    ->get('valor');
        $orcamentos_pecas = $orcamentos_pecas->pluck('valor');
        $valor_orcamentos_pecas_total = 0;
        for ($i=0; $i < count($orcamentos_pecas) ; $i++) { 
            $valor_orcamentos_pecas_total += $orcamentos_pecas[$i];
        }
        // soma do valor total de orçamentos de serviços
        $orcamentos_servicos = Orcamento::where('valor','!=', 0)
                                    ->where('tipo', '=', 'Serviço')
                                    ->get('valor');
        $orcamentos_servicos = $orcamentos_servicos->pluck('valor');
        $valor_orcamentos_servicos_total = 0;
        for ($i=0; $i < count($orcamentos_servicos) ; $i++) { 
            $valor_orcamentos_servicos_total += $orcamentos_servicos[$i];
        }
        // soma do valor total de notas
        $notas = Nota::all();
        foreach($notas as $key => $nota_atributo) {
            $atributos = Orcamento::where('id', $nota_atributo->orcamento_id)->first();
            if(isset($atributos)){

                $notas[$key]['numero'] = $atributos->numero;
                $notas[$key]['veiculo'] = $atributos->veiculo;
                $notas[$key]['placa'] = $atributos->placa;
                $notas[$key]['valor'] = $atributos->valor;
                $notas[$key]['tipo'] = $atributos->tipo;
                $notas[$key]['secretaria'] = $atributos->secretaria;
                $notas[$key]['porcento'] = $atributos->porcento;
                $notas[$key]['valor_real'] = $atributos->valor_real;
            }
        }
        $notas = $notas->pluck('valor');
        $valor_notas_total = 0;
        for ($i=0; $i < count($notas) ; $i++) { 
            $valor_notas_total += $notas[$i];
        }
        // soma valor total de notas de peças
        $notas_pecas = Nota::all();
        foreach($notas_pecas as $key => $nota_atributo) {
            $atributos = Orcamento::where('id', $nota_atributo->orcamento_id)
            ->where('tipo', 'Peças')
            ->first();
            if(isset($atributos)){

                $notas_pecas[$key]['numero'] = $atributos->numero;
                $notas_pecas[$key]['veiculo'] = $atributos->veiculo;
                $notas_pecas[$key]['placa'] = $atributos->placa;
                $notas_pecas[$key]['valor'] = $atributos->valor;
                $notas_pecas[$key]['tipo'] = $atributos->tipo;
                $notas_pecas[$key]['secretaria'] = $atributos->secretaria;
                $notas_pecas[$key]['porcento'] = $atributos->porcento;
                $notas_pecas[$key]['valor_real'] = $atributos->valor_real;
            }
        }
        $notas_pecas = $notas_pecas->pluck('valor');
        $valor_pecas_total = 0;
        for ($i=0; $i < count($notas_pecas) ; $i++) { 
            $valor_pecas_total += $notas_pecas[$i];
        }
        // soma valor total das notas de serviços
        $valor_notas_servicos = $valor_notas_total-$valor_pecas_total;


        return view('app.dashboard', [
            'valor_orc' => $valor_orcamentos_total,
            'valor_orc_pecas' => $valor_orcamentos_pecas_total,
            'valor_orc_servicos' => $valor_orcamentos_servicos_total,
            'valor_notas' => $valor_notas_total,
            'valor_not_pecas' => $valor_pecas_total,
            'valor_not_servicos' => $valor_notas_servicos
        ]);
    }
}

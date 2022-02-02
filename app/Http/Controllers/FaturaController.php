<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Orcamento;
use App\Models\Nota;

class FaturaController extends Controller
{
    public function faturamento(){

        return view('app.faturamento');
    }
}

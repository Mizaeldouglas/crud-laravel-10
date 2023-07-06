<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDeProdutosCadastrado = $this->busacaTotalDeProdutosCadastrado();
        $totalDeClienteCadastrado = $this->busacaTotalDeClientesCadastrado();
        $totalDeVendasCadastrado = $this->busacaTotalDeVendasCadastrado();
        $totalDeUsuarioCadastrado = $this->busacaTotalDeUsuarioCadastrado();


        return view('pages.dashboard.dashboard',compact('totalDeProdutosCadastrado','totalDeClienteCadastrado','totalDeVendasCadastrado','totalDeUsuarioCadastrado'));
    }

    public function busacaTotalDeProdutosCadastrado(): int
    {
        $findProduto = Produto::all()->count();
        return $findProduto;
    }
    public function busacaTotalDeClientesCadastrado(): int
    {
        $findCliente = Cliente::all()->count();
        return $findCliente;
    }
    public function busacaTotalDeVendasCadastrado(): int
    {
        $findVendas = Venda::all()->count();
        return $findVendas;
    }
public function busacaTotalDeUsuarioCadastrado(): int
    {
        $findUsuarios = User::all()->count();
        return $findUsuarios;
    }

}

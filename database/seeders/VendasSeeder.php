<?php

namespace Database\Seeders;


use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use Faker\Factory as Faker;
use Faker\Provider\pt_BR\Person;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    public function run(): void
    {

        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            $produto = Produto::inRandomOrder()->first();
            $cliente = Cliente::inRandomOrder()->first();

            Venda::create([
                'numero_da_venda' => $i,
                'produto_id' => $produto->id,
                'cliente_id' => $cliente->id,
            ]);
        }
    }
}

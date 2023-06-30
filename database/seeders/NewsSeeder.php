<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'TSE retoma julgamento que pode tornar Bolsonaro inelegível',
                'description' => 'Corte eleitoral julga se Bolsonaro cometeu abuso em reunião com embaixadores.',
                'created_at' => '2023-06-27 02:00:10',
                'updated_at' => '2023-06-27 02:00:10'
            ],
            [
                'title' => 'Preço médio dos remédios sobe 6,6% em maio, aponta levantamento',
                'description' => 'Estudo considera os medicamentos mais procurados vendidos em redes farmacêuticas.',
                'created_at' => '2023-06-25 05:05:30',
                'updated_at' => '2023-06-26 07:00:00'
            ],
            [
                'title' => 'Prouni do 2º semestre abre inscrições nesta terça-feira',
                'description' => 'Programa distribui bolsas de estudo. Prazo termina em 30 de junho.',
                'created_at' => '2023-06-05 06:20:00',
                'updated_at' => '2023-06-05 07:00:13'
            ],
            [
                'title' => 'Volkswagen suspende temporariamente produção de carros no Brasil',
                'description' => 'Empresa afirmou que medida foi tomada por conta da estagnação do mercado.',
                'created_at' => '2023-06-27 21:41:06',
                'updated_at' => '2023-06-27 21:41:06'
            ],
            [
                'title' => 'Donos de escola investigada por maus-tratos em SP se entregam à polícia',
                'description' => 'Casos foram descobertos após uma professora esconder o celular e gravar.',
                'created_at' => '2023-06-27 18:39:13',
                'updated_at' => '2023-06-27 18:39:13'
            ]
        ]);
    }
}

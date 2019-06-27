<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'name' => 'Daniel Carvalho da Silva',
                'phone' => '(21) 96809-4198',
                'email' => 'ti.danielcarvalho@gmail.com',
                'cep' => '21765320',
                'rua' => 'Rua General Lima de Figueiredo',
                'bairro' => 'Realengo',
                'cidade' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'ibge' => '3304557'
            ],
            [
                'name' => 'Thaynara Luiza dos Santos',
                'phone' => '(21) 96771-0910',
                'email' => 'thaynaraluiza@hotmail.com',
                'cep' => '21765420',
                'rua' => 'Rua Ariramba',
                'bairro' => 'Realengo',
                'cidade' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'ibge' => '3304557'
            ],
            [
                'name' => 'Bernardo Borges',
                'phone' => '(31) 98120-0021',
                'email' => 'bborges@gmail.com',
                'cep' => '38402136',
                'rua' => 'Rua Ceres',
                'bairro' => 'Minas Gerais',
                'cidade' => 'Uberlândia',
                'uf' => 'MG',
                'ibge' => '3170206'
            ],
            [
                'name' => 'Iago Silva',
                'phone' => '(11) 96671-9729',
                'email' => 'silva.iago@outlook.com',
                'cep' => '04236094',
                'rua' => 'Rua 2 de Fevereiro',
                'bairro' => 'Cidade Nova Heliópolis',
                'cidade' => 'São Paulo',
                'uf' => 'SP',
                'ibge' => '3550308'
            ]
        ]);    
    }
}

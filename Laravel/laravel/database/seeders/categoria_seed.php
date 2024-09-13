<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class categoria_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) { 
            DB::table('categorias')->insert(array(
                'nombre' => 'Arcade'.$i
            ));
        }

        $this->command->info('La tabla de categoria fue rellenada');
    }
}

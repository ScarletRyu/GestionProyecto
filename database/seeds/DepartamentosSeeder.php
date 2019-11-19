<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'Informática'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Turismo'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Administración'
        ]);
    }
}

<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'jon',
            'apellido' => 'imanol',
            'email' => 'j@p.com',
            'telefono' => '666666666'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Ainara',
            'apellido' => 'Larrañaga',
            'email' => 'a@l.com',
            'telefono' => '656423523'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Juan',
            'apellido' => 'Aginaga',
            'email' => 'j@a.com',
            'telefono' => '664945125'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Ramón',
            'apellido' => 'Ramirez',
            'email' => 'r@r.com',
            'telefono' => '778945321'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'María',
            'apellido' => 'Martinez',
            'email' => 'm@m.com',
            'telefono' => '612345789'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Anartz',
            'apellido' => 'Agirre',
            'email' => 'a@ag.com',
            'telefono' => '699944423'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Irati',
            'apellido' => 'Iruretagoiena',
            'email' => 'i@i.com',
            'telefono' => '688423566'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Nahia',
            'apellido' => 'Tolosa',
            'email' => 'n@t.com',
            'telefono' => '634945976'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Naroa',
            'apellido' => 'Fernandez',
            'email' => 'n@f.com',
            'telefono' => '794365376'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Asier',
            'apellido' => 'Etxeberria',
            'email' => 'a@e.com',
            'telefono' => '616649780'
        ]);
    }
}

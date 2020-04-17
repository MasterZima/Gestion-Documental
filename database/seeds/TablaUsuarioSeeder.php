<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => 'Admin',
            'password' => bcrypt('Admin123'),
            'nombre' => 'Administrador'
        ]);

        DB::table('usuario')->insert([
            'usuario' => 'DiCuevas',
            'password' => bcrypt('DiCuevas123'),
            'nombre' => 'Diana Cuevas'
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1
        ]);
    }
}

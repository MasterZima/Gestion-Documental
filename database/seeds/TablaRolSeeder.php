<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Administrador',
            'Director',
            'Usuario',
            'Invitado'
        ];
        foreach($roles as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

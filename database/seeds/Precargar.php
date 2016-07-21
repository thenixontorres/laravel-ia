<?php

use Illuminate\Database\Seeder;
use App\Models\tipouser;
use App\User;
use App\Models\tutor;
use App\Models\programa;
use App\Models\lineainv;

class Precargar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipousers')->insert([
            'tipo'              => 'Master'
        ]);

        DB::table('tipousers')->insert([
            'tipo'              => 'Admin'
        ]);

        DB::table('users')->insert([
            'name'              => 'Master',
            'email'             => 'master@example.com',
            'password'          => bcrypt('master'),
            'tipouser_id'       => '1'
        ]);

        DB::table('users')->insert([
            'name'              => 'Admin',
            'email'             => 'admin@example.com',
            'password'          => bcrypt('admin'),
            'tipouser_id'       => '2'
        ]);

        DB::table('tutors')->insert([
            'nombre'              => 'Jairo',
            'apellido'            => 'Molina',
            'cedula'              => '12345678',
            'Direccion'           => 'san Juan de los Morros',
            'tlf'                 => '04169312333'
        ]);

        DB::table('programas')->insert([
            'nombre'              => 'Ingenieria en Informatica',
        ]);

        DB::table('lineainvs')->insert([
            'nombre'              => 'Inteligencia Artificial',
        ]);

        DB::table('lineainvs')->insert([
            'nombre'              => 'Sistemas de Informacion',
        ]);

        DB::table('lineainvs')->insert([
            'nombre'              => 'Software Educativo',
        ]);

        DB::table('lineainvs')->insert([
            'nombre'              => 'Sistema Web',
        ]);
    }
}

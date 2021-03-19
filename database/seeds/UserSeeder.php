<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $contrasena = Hash::make('password');
        factory(App\User::class, 1)->create([
            'activo' => true,
            'email' => 'carlos@miapp.desa',
            'name' => 'Carlos',
            'password' => $contrasena,
        ]);
        factory(App\User::class, 3)->create([
            'activo' => true,
            'password' => $contrasena,
        ]);
    }

}

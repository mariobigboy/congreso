<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Persona;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('nombre', 'user')->first();
        $role_admin = Role::where('nombre', 'admin')->first();
        $role_super_admin = Role::where('nombre', 'superadmin')->first();
        $role_asistente = Role::where('nombre', 'asistente')->first();
        //$role_disertante = Role::where('nombre', 'disertante')->first();

        //persona para superadmin
        $persona = new Persona();
        $persona->nombre = 'super';
        $persona->apellido = 'admin';
        $persona->dni = '35000000';
        $persona->telefono = '';
        $persona->pais = 'Argentina';
        $persona->email = 'superadmin@gmail.com';
        $persona->foto_url = 'avatar_default.png';
        $persona->save();

        //user admin:
        $user = new User();
        $user->name = 'superadmin';
        $user->email = 'superadmin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_super_admin);

        //persona para admin
        $persona = new Persona();
        $persona->nombre = 'admin';
        $persona->apellido = 'admin';
        $persona->dni = '35000001';
        $persona->telefono = '';
        $persona->pais = 'Argentina';
        $persona->email = 'admin@gmail.com';
        $persona->foto_url = 'avatar_default.png';
        $persona->save();
        //user para admin
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);

       

    }
}

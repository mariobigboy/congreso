<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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

        $user = new User();
        $user->name = 'superadmin';
        $user->email = 'superadmin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_super_admin);

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);
        
        $user = new User();
        $user->name = 'usuario';
        $user->email = 'usuario@gmail.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);

        /*$user = new User();
        $user->name = 'Asistente';
        $user->email = 'asistente@gmail.com';
        $user->password = bcrypt('asistente');
        $user->save();
        $user->roles()->attach($role_asistente);

        $user = new User();
        $user->name = 'Disertante';
        $user->email = 'disertante@gmail.com';
        $user->password = bcrypt('disertante');
        $user->save();
        $user->roles()->attach($role_disertante);*/
    }
}

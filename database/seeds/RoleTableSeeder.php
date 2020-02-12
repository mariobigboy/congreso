<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $role = new Role();
        $role->nombre = 'developer';
        $role->descripcion = 'Desarrollador'; //tendrá acceso a todo
        $role->save(); 

        $role = new Role();
        $role->nombre = 'superadmin';
        $role->descripcion = 'Super Administrador';
        $role->save();

        $role = new Role();
        $role->nombre = 'admin';
        $role->descripcion = 'Administrador';
        $role->save();

        $role = new Role();
        $role->nombre = 'user';
        $role->descripcion = 'Empleado';
        $role->save();

        /*$role = new Role();
        $role->nombre = 'disertante';
        $role->descripcion = 'Disertante';
        $role->save();*/
    }
}

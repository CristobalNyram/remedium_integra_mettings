<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $super_admin= Role::create(['name'=>'Super_admin']);
       $admin= Role::create(['name'=>'Admin']);
       $user =  Role::create(['name'=>'User']);

       Permission::create(['name'=>'configurations'])->syncRoles([$super_admin,$admin]);
       Permission::create(['name'=>'roles_index'])->syncRoles([$super_admin,$admin]);
       Permission::create(['name'=>'permissions_index'])->syncRoles([$super_admin,$admin]);
       Permission::create(['name'=>'users_index'])->syncRoles([$super_admin,$admin]);


    }
}

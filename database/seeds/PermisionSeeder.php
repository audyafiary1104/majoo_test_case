<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permision = ["create_roles","edit_roles","delete_roles","view_roles","dashboard","stock_report","create_suplier","edit_suplier","view_suplier","delete_suplier","create_users","edit_users","view_users","delete_users","create_category","edit_category","view_category","delete_category","create_transaction","delete_transaction","view_transaction","view_pos","create_customer","edit_customer","delete_customer","view_customer","api","create_product","delete_product","view_product","edit_product"];
        $role = Role::create(['name' => 'super admin']);

        foreach ($permision as $key => $value) {
            Permission::create(['name' => $value]);
            $role->givePermissionTo($value);
        }
        $user = \App\User::create([
            'name' => 'Audi Afiary',
            'password' => bcrypt('Qwerty12#'),
            'email' => 'audy.develop192@gmail.com',
         ]); 
        $user->assignRole('super admin');
    }
}

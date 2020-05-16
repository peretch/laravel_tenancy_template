<?php

use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\Tenant\User();
        $user->email = 'webmaster@peretch.com';
        $user->name = 'webmaster';
        $user->password = bcrypt('peretch');
        $user->save();
    }
}

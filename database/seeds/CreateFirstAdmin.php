<?php

use Illuminate\Database\Seeder;

class CreateFirstAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        DB::table('managers')->insert([
            'name'              => 'Junyy',
            'email'             => '1020446694@qq.com',
            'created_user_name' => 'Junyy',
            'password'          => bcrypt('123456789'),
            'is_verify'         => '1',
            'role_id'           => '1',
            'verify_str'        => str_random(48),
            'last_login_time'   => \Carbon\Carbon::now(),
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);
    }
}

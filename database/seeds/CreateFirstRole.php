<?php

use Illuminate\Database\Seeder;

class CreateFirstRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        DB::table('roles')->insert([
            'grade'      => '主管',
            'is_delete'  => '0',
            'is_verify'      => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}

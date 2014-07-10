<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();

        User::create(array(
                      'user_login' => 'admin',
                      'user_pass' => Hash::make('admin'),
                      'user_email' => 'admin@admin.com',
                    ));
    }

}
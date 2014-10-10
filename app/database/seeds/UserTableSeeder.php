<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'rissa@rissawaters.com';
        $user->password = Hash::make($_ENV['USER_PASS']);
        $user->save();
    }

}

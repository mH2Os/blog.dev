<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'rissa@rissawaters.com';
        $user->password = Hash::make('p00hb3arr0ck$');
        $user->save();
    }

}

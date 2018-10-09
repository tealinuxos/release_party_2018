<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(UsersSeeder::class);

        Model::reguard();
    }
}

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = [
            'youfool~'
        ];

        foreach($user as $username => $email){

            DB::table('users')->insert([
                'name' => $username,
                'username' => $email,
                'email' => $email,
                'password' => bcrypt(env('PASSADMIN')),
                'role' => 'admin',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
                ]);
        }

    }
}
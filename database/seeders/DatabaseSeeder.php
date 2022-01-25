<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'bananachatsystem@gmail.com',
            'password' => Hash::make('admin1234'),
        ]);

        $user = User::all()->where('name', 'admin')->first();

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => strval($user->id),
            'user_type' => 'App\Models\User',
        ]);

    }
}

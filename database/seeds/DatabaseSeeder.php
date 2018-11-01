<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        $this->call(ConfessionsTableSeed::class);
        $this->call(AdminSeeder::class);
    }
}

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'nick_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '0964846895',
                'address' => 'Hà Nội',
                'type' => 1,
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}

class ConfessionsTableSeed extends Seeder
{
    public function run()
    {
        DB::table('confessions')->insert([
            [
                'title' => 'Cfs1',
                'body' => 'content cfs1',
            ],
            [
                'title' => 'cfs2',
                'body' => 'content cfs2',
            ],
            [
                'title' => 'cfs3',
                'body' => 'content cfs3',
            ],
            [
                'title' => 'cfs4',
                'body' => 'content cfs4',
            ],
            [
                'title' => 'cfs5',
                'body' => 'contetn cfs5',
            ]
        ]);
    }
}

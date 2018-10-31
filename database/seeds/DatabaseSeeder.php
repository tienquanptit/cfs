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
    }
}

class ConfessionsTableSeed extends Seeder
{
    public function run()
    {
        DB::table('confessions')->insert([
            [
                'title' => 'Cfs1',
                'content' => 'content cfs1',
            ],
            [
                'title' => 'cfs2',
                'content' => 'content cfs2',
            ],
            [
                'title' => 'cfs3',
                'content' => 'content cfs3',
            ],
            [
                'title' => 'cfs4',
                'content' => 'content cfs4',
            ],
            [
                'title' => 'cfs5',
                'content' => 'contetn cfs5',
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $data = [
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'Ten' => 'admin',
            'role' => 'admin',
            'GioiTinh' => 'nam',
            'NamSinh' => '2022-2-2',
            'created_at' => new \DateTime(),
        ];
        DB::table('users')->insert($data);
    }
}
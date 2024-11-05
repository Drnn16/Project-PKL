<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('document')->insert([
            [
                'id' => '999',
                'nama_user' => 'Randy',
                'jabatan_user' => 'Tim Dokumentasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '777',
                'nama_user' => 'CLEON',
                'jabatan_user' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '444',
                'nama_user' => 'CLEONY',
                'jabatan_user' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
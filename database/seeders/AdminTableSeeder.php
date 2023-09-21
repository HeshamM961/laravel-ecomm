<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            [
                'id' => 1,
                'name' => 'Super Admin',
                'type' => 'superadmin',
                'vendor_id' => 0,
                'mobile' => '120000000',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$HYgnSobwTyXyy1JYJH91GOA3BnQgmO4U2xz/QdRAdyLeW9pNeg0Uy', // 12345678
                'image' => '',
                'status' => 1,
            ]
        ];

        Admin::insert($adminRecords);
    }
}

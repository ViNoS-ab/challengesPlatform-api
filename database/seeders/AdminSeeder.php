<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'full_name' => 'abdessamed',
                'password' => Hash::make('5RO8TTzmUPg4'),
                'is_member' => true,
                'role' => 'admin'
            ]);
            User::create([
                'full_name' => 'ouael',
                'password' => Hash::make('FVFHAOEr3FA8'),
                'is_member' => true,
                'role' => 'admin'
            ]);
            User::create([
                'full_name' => 'abderraouf',
                'password' => Hash::make('Ui3tCLLtlpl2'),
                'is_member' => true,
                'role' => 'admin'
            ]);
            User::create([
                'full_name' => 'abderrahman',
                'password' => Hash::make('PrCiXwB5X9wy'),
                'is_member' => true,
                'role' => 'admin'
            ]);
    }
}

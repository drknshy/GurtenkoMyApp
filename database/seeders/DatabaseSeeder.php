<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Status::create(['title' => 'новая']);
        Status::create(['title' => 'в процессе']);
        Status::create(['title' => 'завершена']);
        Status::create(['title' => 'отменена']);

        User::create([
            'firstname' => 'Admin',
            'middlename' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@example.com',
            'login' => 'administrator',
            'password' => Hash::make('administrator'),
            'tel' => '+79999999999',
            'role' => 'admin'
        ]);
    }
}

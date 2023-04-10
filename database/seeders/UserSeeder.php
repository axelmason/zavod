<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $password = 'zavod2023';
        $email = 'admin@admin.com';

        User::create(compact('email', 'password'));

        echo "Пользователь создан.\nEmail: $email\nПароль: $password\n";
    }
}

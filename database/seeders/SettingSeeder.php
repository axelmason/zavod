<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            ['name' => 'Хедер', 'alias' => 'header'],
            ['name' => 'Меню', 'alias' => 'nav'],
            ['name' => 'Статистика', 'alias' => 'statistic'],
            ['name' => 'О нас', 'alias' => 'about_us'],
            ['name' => 'Футер', 'alias' => 'footer'],
        ];

        Setting::insert($settings);

        echo "Заданы настройки по умолчанию\n";
    }
}

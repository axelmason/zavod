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
            ['name' => 'Логотип', 'alias' => 'logo', 'value' => 'logo.png'],
            ['name' => 'Номер для связи', 'alias' => 'phone_number', 'value' => '+7999999999'],
            ['name' => 'Текст слайда 1', 'alias' => 'slider_item_1', 'value' => 'text1'],
            ['name' => 'Текст слайда 2', 'alias' => 'slider_item_2', 'value' => 'text2'],
            ['name' => 'Текст слайда 3', 'alias' => 'slider_item_3', 'value' => 'text3'],
            ['name' => 'Страница "О нас"', 'alias' => 'about_page_text', 'value' => file_get_contents(__DIR__.'/about_default.html')]
        ];

        Setting::insert($settings);

        echo "Заданы настройки по умолчанию\n";
    }
}

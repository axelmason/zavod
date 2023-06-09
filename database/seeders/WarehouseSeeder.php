<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehouses = [
            ['name' => 'Старомалиновка', 'alias' => 'main'],
            ['name' => 'Кормиловка', 'alias' => 'spare']
        ];

        Warehouse::insert($warehouses);

        echo "Добавлены склады\n";
    }
}

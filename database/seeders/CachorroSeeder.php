<?php

namespace Database\Seeders;

use App\Models\Cachorro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CachorroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cachorro :: Factory(5000)->create();
    }
}

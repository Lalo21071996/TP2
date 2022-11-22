<?php

namespace Database\Seeders;

use App\Models\PerroAdulto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerroAdultoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PerroAdulto :: Factory(10)->create();
    }
}

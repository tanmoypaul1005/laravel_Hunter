<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\man;
class manSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    man::factory()->count(10)->create();
    }
}

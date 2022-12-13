<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class categoriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'name' => 'Projects'
        ]);

        Categories::create([
            'name' => 'Courses'
        ]);

        Categories::create([
            'name' => 'Sports'
        ]);

        Categories::create([
            'name' => 'Education'
        ]);
    }
}

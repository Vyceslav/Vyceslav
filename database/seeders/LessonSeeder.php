<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            ['name_lesson' => 'Введение'],
            ['name_lesson' => 'Холодное вожение'],
            ['name_lesson' => 'Движение по площадке'],
            ['name_lesson' => 'Движение по малоинтенсивным дорогам'],
            ['name_lesson' => 'Движение по интенсивным дорогам'],
            ['name_lesson' => 'Движение задним ходом'],
        ]);
    }
}

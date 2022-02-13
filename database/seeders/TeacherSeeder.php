<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Int_;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 9; $i++) {
            DB::table('teachers')->insert([
                'surname' => Str::random(10),
                'firstname' => Str::random(10),
                'patronymic' => Str::random(10),
                'gender' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'created_at' => Carbon::parse(),
                'updated_at' => Carbon::parse(),
            ]);
        }
    }
}

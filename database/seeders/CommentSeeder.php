<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('comments')->insert([
            'user_id' => $faker-> randomNumber(1),
            'title' => $faker-> sentence(5),
            'body' => $faker -> paragraph(5)
        ]);
    }
}

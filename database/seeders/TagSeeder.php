<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'user_id' => 1,
            'name' => 'Study',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        Tag::create([
            'user_id' => 1,
            'name' => 'Reading',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        Tag::create([
            'user_id' => 2,
            'name' => 'Sleep',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}

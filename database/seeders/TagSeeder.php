<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name'          => 'PHP',
                'slug'          => 'php',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Laravel',
                'slug'          => 'laravel',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Livewire',
                'slug'          => 'livewire',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);

        Tag::factory()->count(10)->create();
    }
}

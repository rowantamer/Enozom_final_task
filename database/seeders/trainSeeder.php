<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'train_name' => 'Talgo',
            ],
            [
                'train_name' => 'French',
            ],
            [
                'train_name' => 'Spain',
            ],

        ];

        foreach ($trains as $train) {
            Train::create($train);
        }
    }
}

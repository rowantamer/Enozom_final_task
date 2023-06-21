<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class tripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [
            [
                'trip_name'=>'Talgo',
                'train_id' => 1,
                'trips_id' => "A001"

            ],
            [
                'trip_name'=>'French',
                'train_id' => 2,
                'trips_id' => "A002"
            ],
            [
                'trip_name'=>'Spain',
                'train_id' => 3,
                'trips_id' => "A003"
            ],
            [
                'trip_name'=>'Talgo',
                'train_id' => 1,
                'trips_id' => "A004"
            ],
            [
                'trip_name'=>'French',
                'train_id' => 2,
                'trips_id' => "A005"
            ],
            [
                'trip_name'=>'Spain',
                'train_id' => 3,
                'trips_id' => "A006"
            ],

        ];

        foreach ($trips as $trip) {
            Trip::create($trip);
        }
    }
}

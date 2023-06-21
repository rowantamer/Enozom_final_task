<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TripStation;

class tripStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tripStations = [
            [
                'trip_id'=>1,
                'station_id'=>1,
                'stop_time' =>'07:00'
            ],
            [
                'trip_id'=>1,
                'station_id'=>5,
                'stop_time' =>'09:00'
            ],
            [
                'trip_id'=>2,
                'station_id'=>1,
                'stop_time' =>'07:30'
            ],
            [
                'trip_id'=>2,
                'station_id'=>3,
                'stop_time' =>'08:30'
            ],
            [
                'trip_id'=>2,
                'station_id'=>4,
                'stop_time' =>'09:30'
            ],
            [
                'trip_id'=>2,
                'station_id'=>5,
                'stop_time' =>'10:30'
            ],
            [
                'trip_id'=>3,
                'station_id'=>1,
                'stop_time' =>'09:00'
            ],
            [
                'trip_id'=>3,
                'station_id'=>3,
                'stop_time' =>'10:15'
            ],
            [
                'trip_id'=>3,
                'station_id'=>5,
                'stop_time' =>'11:30'
            ],
            [
                'trip_id'=>4,
                'station_id'=>5,
                'stop_time' =>'07:00'
            ],
            [
                'trip_id'=>4,
                'station_id'=>1,
                'stop_time' =>'9:00'
            ],
            [
                'trip_id'=>5,
                'station_id'=>5,
                'stop_time' =>'07:30'
            ],
            [
                'trip_id'=>5,
                'station_id'=>4,
                'stop_time' =>'07:30'
            ],
            [
                'trip_id'=>5,
                'station_id'=>3,
                'stop_time' =>'08:30'
            ],
            [
                'trip_id'=>5,
                'station_id'=>2,
                'stop_time' =>'09:30'
            ],
            [
                'trip_id'=>5,
                'station_id'=>1,
                'stop_time' =>'10:30'
            ],
            [
                'trip_id'=>6,
                'station_id'=>5,
                'stop_time' =>'09:00'
            ],

            [
                'trip_id'=>6,
                'station_id'=>3,
                'stop_time' =>'10:15'
            ],

            [
                'trip_id'=>6,
                'station_id'=>1,
                'stop_time' =>'11:30'
            ],

        ];

        foreach ($tripStations as $tripStation) {
            TripStation::create($tripStation);
        }
    }
}

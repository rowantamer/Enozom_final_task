<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Station;

class stationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $stations = [
            [
                'station_name' => 'Alexandria',
            ],
            [
                'station_name' => 'Damanhour',
            ],
            [
                'station_name' => 'Tanta',
            ],
            [
                'station_name' => 'Banha',
            ],
            [
                'station_name' => 'Cairo',
            ],


        ];

        foreach ($stations as $station) {
            Station::create($station);
        }
    }
}

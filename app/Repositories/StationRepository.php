<?php
namespace App\Repositories;

use App\Models\Station;

class StationRepository implements IStationRepository {
    public function getFromStationIdByStationName($from ){
        $fromStation = Station::where('station_name', $from)->first()->id;
        return [$fromStation];
    }
    public function getToStationIdByStationName($to ){
        $toStation = Station::where('station_name', $to)->first()->id;
        return $toStation;
    }
}

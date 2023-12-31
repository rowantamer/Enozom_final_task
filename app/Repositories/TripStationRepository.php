<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\TripStation;

class TripStationRepository implements ITripStationRepository
{
    public function getListOfTrainsAndTrips($fromId, $toId)
    {
        $trips = TripStation::join('trips', 'trip_stations.trip_id', '=', 'trips.id')
            ->join('trains', 'trips.train_id', '=', 'trains.id')
            ->join('trip_stations AS ts2', 'trips.id', '=', 'ts2.trip_id')
            ->where('trip_stations.station_id', '=', $fromId)
            ->where('ts2.station_id', '=', $toId)
            ->whereRaw('trip_stations.stop_time <= ts2.stop_time')
            ->select('trips.trips_id', 'trains.train_name', 'trip_stations.stop_time')
            ->distinct()
            ->get();

        return $trips;
    }




}

<?php

namespace App\Services;

use App\Repositories\StationRepository;
use App\Repositories\TripStationRepository;

class TripStationService
{
    private $stationRepository;
    private $tripStationRepository;
    public function __construct(StationRepository $stationRepository, TripStationRepository $tripStationRepository)
    {
        $this->stationRepository = $stationRepository;
        $this->tripStationRepository = $tripStationRepository;
    }
    public function getListOfTrainsAndTrips($from, $to)
    {
        //get id of the station from or to
       $fromId= $this->stationRepository->getFromStationIdByStationName($from);
       $toId= $this->stationRepository->getToStationIdByStationName($to);
       $data=$this->tripStationRepository->getListOfTrainsAndTrips($fromId, $toId);

        return response()->json([$data],200);


    }

    public function getListOfTrainsAndTripsWithId($from, $to){
        $data=$this->tripStationRepository->getListOfTrainsAndTrips($from, $to);

        return response()->json([$data],200);
    }
}

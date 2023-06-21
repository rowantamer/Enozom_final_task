<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TripStationService;

class TripStationController extends Controller
{
    private $tripStationService;
    public function __construct(TripStationService $tripStationService){
        $this->tripStationService = $tripStationService;
    }
    public function getListOfTrainsAndTrips($from, $to){
        return $this->tripStationService->getListOfTrainsAndTrips($from, $to);
    }
    public function getListOfTrainsAndTripsWithId($from, $to){
        return $this->tripStationService->getListOfTrainsAndTripsWithId($from, $to);
    }
}

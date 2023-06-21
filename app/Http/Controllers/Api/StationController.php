<?php

namespace App\Http\Controllers\Api;

use App\Repositories\StationRepository;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StationController extends Controller
{
    private $stationRepository;
    public function __construct(StationRepository $stationRepository){
        $this->stationRepository = $stationRepository;
    }
    public function getStationData($from , $to){
       $fromId= $this->stationRepository->getFromStationIdByStationName($from);
       $toId = $this->stationRepository->getToStationIdByStationName($to);
        $data = [$fromId, $toId];
       return response()->json($data,200);
    }
}
